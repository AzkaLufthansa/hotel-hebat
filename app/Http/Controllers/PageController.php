<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }

    public function kamar()
    {
        return view('kamar', [
            'title' => 'Kamar'
        ]);
    }

    public function Fasilitas()
    {
        return view('fasilitas', [
            'title' => 'Fasilitas'
        ]);
    }
}
