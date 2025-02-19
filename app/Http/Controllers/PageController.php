<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama : Angga Bayu Setiawan NIM : 2241720106';
    }

    public function articles($id) {
        return 'Halaman Atikel dengan ID ' . $id;
    }
}
