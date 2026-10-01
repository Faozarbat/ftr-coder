<?php

return [

    // Nama yang tercetak di invoice/kwitansi SEKARANG. Sengaja bukan nama PT
    // dulu — PT-nya belum resmi berdiri, menagih atas nama badan usaha yang
    // belum ada secara hukum berisiko administratif. Ganti INVOICE_NAMA_USAHA
    // di .env begitu PT resmi berdiri (tidak perlu ubah kode).
    'nama_usaha' => env('INVOICE_NAMA_USAHA', 'FTR-Coder'),

    // Disimpan untuk referensi/dipakai nanti, BUKAN dipakai otomatis.
    'nama_usaha_resmi' => env('INVOICE_NAMA_USAHA_RESMI', 'PT Maju Jaya Multi Teknologi'),

    'alamat_usaha' => env('INVOICE_ALAMAT_USAHA', ''),
    'wa_usaha' => env('INVOICE_WA_USAHA', '6281999263536'),
    'email_usaha' => env('INVOICE_EMAIL_USAHA', ''),
    'rekening_bank' => env('INVOICE_REKENING_BANK', ''),

    // PPN ditampilkan transparan di invoice (baris "PPN 11%"), tapi otomatis
    // dinetralkan lewat baris "Diskon Penyesuaian" senilai sama, SELAMA
    // 'ppn_aktif_dipungut' masih false — karena penerbit belum PKP, belum
    // boleh benar-benar memungut PPN. Total tagihan ke klien tidak berubah.
    // Set true (INVOICE_PPN_AKTIF_DIPUNGUT=true) begitu sudah resmi PKP.
    'ppn_persen_default' => (float) env('INVOICE_PPN_PERSEN', 11),
    'ppn_aktif_dipungut' => filter_var(env('INVOICE_PPN_AKTIF_DIPUNGUT', false), FILTER_VALIDATE_BOOLEAN),

    // Nomor invoice/kwitansi TIDAK dimulai dari 1 (supaya jumlah proyek yang
    // sebenarnya tidak gampang ditebak dari nomor dokumen) dan TIDAK PERNAH
    // reset per tahun (kalau reset ke angka kecil tiap Januari, itu sendiri
    // jadi petunjuk). Nomor urut internal terus naik selamanya; cuma tahun di
    // depannya yang berubah. Ubah nilai offset ini kapan saja kalau mau
    // "terlihat" sudah berjalan lebih lama — aman, tidak akan membuat nomor
    // yang sudah terbit sebelumnya bertabrakan (lihat Invoice::generateNomor()).
    'nomor_offset_invoice' => (int) env('INVOICE_NOMOR_OFFSET', 46),
    'nomor_offset_kwitansi' => (int) env('KWITANSI_NOMOR_OFFSET', 46),

];
