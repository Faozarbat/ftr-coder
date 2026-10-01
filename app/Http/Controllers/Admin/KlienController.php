<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Klien;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KlienController extends Controller
{
    public function index(Request $request): View
    {
        $klien = Klien::query()
            ->when($request->filled('cari'), fn ($q) => $q->where(function ($q) use ($request) {
                $cari = $request->input('cari');
                $q->where('nama', 'like', "%{$cari}%")
                    ->orWhere('nama_perusahaan', 'like', "%{$cari}%")
                    ->orWhere('whatsapp', 'like', "%{$cari}%");
            }))
            ->withCount(['invoices', 'kwitansi'])
            ->orderBy('nama')
            ->paginate(15)
            ->withQueryString();

        return view('admin.klien.index', compact('klien'));
    }

    public function create(): View
    {
        return view('admin.klien.form', ['klien' => new Klien()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $klien = Klien::create($data);

        return redirect()->route('admin.klien.index')->with('success', "Klien \"{$klien->nama}\" ditambahkan.");
    }

    public function edit(Klien $klien): View
    {
        return view('admin.klien.form', compact('klien'));
    }

    public function update(Request $request, Klien $klien): RedirectResponse
    {
        $klien->update($this->validated($request));

        return redirect()->route('admin.klien.index')->with('success', "Data \"{$klien->nama}\" diperbarui.");
    }

    public function destroy(Klien $klien): RedirectResponse
    {
        if ($klien->invoices()->exists() || $klien->kwitansi()->exists()) {
            return back()->with('error', "\"{$klien->nama}\" tidak bisa dihapus karena masih punya invoice/kwitansi. Hapus dulu dokumennya, atau biarkan saja datanya untuk riwayat.");
        }

        $klien->delete();

        return redirect()->route('admin.klien.index')->with('success', 'Klien dihapus.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'nama' => 'required|string|max:150',
            'nama_perusahaan' => 'nullable|string|max:150',
            'email' => 'nullable|email|max:150',
            'whatsapp' => 'nullable|string|max:30',
            'alamat' => 'nullable|string|max:500',
            'catatan' => 'nullable|string|max:1000',
        ]);
    }
}
