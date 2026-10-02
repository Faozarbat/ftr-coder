@extends('layouts.admin')

@section('title', $klien->exists ? 'Edit Klien' : 'Tambah Klien')

@section('content')
    <h1 style="margin-bottom: 1.5rem;">{{ $klien->exists ? 'Edit Klien' : 'Tambah Klien' }}</h1>

    <div class="form-box" style="max-width: 560px;">
        <form method="POST" action="{{ $klien->exists ? route('admin.klien.update', $klien) : route('admin.klien.store') }}">
            @csrf
            @if ($klien->exists) @method('PUT') @endif

            <div class="field">
                <label>Nama *</label>
                <input type="text" name="nama" value="{{ old('nama', $klien->nama) }}" required>
                @error('nama') <div class="field-error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Nama Perusahaan (opsional)</label>
                <input type="text" name="nama_perusahaan" value="{{ old('nama_perusahaan', $klien->nama_perusahaan) }}">
            </div>

            <div class="field-row">
                <div class="field">
                    <label>WhatsApp</label>
                    <input type="text" name="whatsapp" value="{{ old('whatsapp', $klien->whatsapp) }}" placeholder="08xx-xxxx-xxxx">
                    @error('whatsapp') <div class="field-error">{{ $message }}</div> @enderror
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email', $klien->email) }}">
                    @error('email') <div class="field-error">{{ $message}}</div> @enderror
                </div>
            </div>

            <div class="field">
                <label>Alamat</label>
                <textarea name="alamat" rows="2">{{ old('alamat', $klien->alamat) }}</textarea>
            </div>

            <div class="field">
                <label>Catatan Internal (tidak tampil di invoice)</label>
                <textarea name="catatan" rows="2">{{ old('catatan', $klien->catatan) }}</textarea>
            </div>

            <button type="submit" class="btn btn-accent">{{ $klien->exists ? 'Simpan Perubahan' : 'Tambah Klien' }}</button>
            <a href="{{ route('admin.klien.index') }}" class="btn btn-outline">Batal</a>
        </form>
    </div>
@endsection
