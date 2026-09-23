@extends('layouts.app')

@section('title', 'Proses Kerja — FTR-Coder')
@section('meta_description', 'Pahami alur kerja FTR-Coder dari briefing awal hingga website Anda siap digunakan.')

@section('content')
    <h1 style="margin-bottom: 0.5rem;">Proses Kerja</h1>
    <p style="color: var(--text-muted); margin-bottom: 2rem;">Transparan dari awal hingga akhir, supaya Anda tahu persis apa yang akan dilalui.</p>

    <div style="max-width: 700px;">
        @php
            $steps = [
                ['title' => 'Briefing', 'desc' => 'Diskusi kebutuhan, target, dan referensi Anda lewat WhatsApp atau pertemuan langsung.'],
                ['title' => 'Desain', 'desc' => 'Kami rancang tampilan dan struktur sesuai kebutuhan, sebelum masuk ke tahap coding.'],
                ['title' => 'Development', 'desc' => 'Proses pembuatan website/aplikasi berjalan, dengan update progres berkala.'],
                ['title' => 'Demo', 'desc' => 'Anda mencoba langsung hasil kerja kami sebelum finalisasi.'],
                ['title' => 'Revisi', 'desc' => 'Penyesuaian berdasarkan masukan Anda dari hasil demo.'],
                ['title' => 'Deploy', 'desc' => 'Website/aplikasi resmi online dan siap digunakan.'],
            ];
        @endphp

        @foreach ($steps as $i => $step)
            <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem;">
                <div style="font-family: 'Courier New', monospace; color: var(--accent); font-weight: bold; font-size: 1.1rem;">
                    {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                </div>
                <div>
                    <h3 style="margin-bottom: 0.25rem;">{{ $step['title'] }}</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem;">{{ $step['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection