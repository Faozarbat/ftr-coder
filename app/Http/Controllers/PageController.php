<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function tentangKami(): View
    {
        return view('pages.tentang-kami');
    }

    public function prosesKerja(): View
    {
        return view('pages.proses-kerja');
    }

    public function kontak(): View
    {
        return view('pages.kontak');
    }

    public function kebijakanPrivasi(): View
    {
        return view('pages.kebijakan-privasi');
    }
}