<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\FasilitasKamar;
use App\Models\FasilitasHotel;

class PageController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'kamar' => Kamar::all()
        ]);
    }

    public function kamar()
    {
        return view('kamar', [
            'title' => 'Kamar',
            'kamar' => Kamar::with('fasilitas')->get()
        ]);
    }

    public function Fasilitas()
    {
        return view('fasilitas', [
            'title' => 'Fasilitas',
            'fasilitas' => FasilitasHotel::all()
        ]);
    }
}
