<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang';
    }

    public function about() {
        return 'NIM : 2341760113 <br> Nama : Satrio Dian Nugroho';
    }
    
    public function articles($id)  {
        return 'Halaman Artikel dengan ID '.$id;
    }
}