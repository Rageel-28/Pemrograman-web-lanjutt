<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        // Silakan ganti dengan Nama dan NIM asli Anda
        return 'Nama: [Isi Nama Anda] <br> NIM: [Isi NIM Anda]'; 
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}