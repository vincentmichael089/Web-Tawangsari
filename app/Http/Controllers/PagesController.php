<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index'); 
    }

    public function berita(){
        return view('pages.berita');
    }

    public function potensi(){
        return view('pages.potensi');
    }

    public function login(){
        return view('pages.login')
    }
}
