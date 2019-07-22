<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = 'Desa Tawangsari'; 
        return view('pages.index')->with('title', $title); 
    }

    public function berita(){
        $title = 'Berita | Desa Tawangsari'; 
        return view('pages.berita')->with('title', $title);
    }

    public function potensi(){
        $title = 'Peta Potensi | Desa Tawangsari'; 
        return view('pages.potensi')->with('title', $title);
    }

    public function login(){
        $title = 'Masuk | Desa Tawangsari'; 
        return view('pages.login')->with('title', $title);
    }
}
