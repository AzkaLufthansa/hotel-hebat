<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\FasilitasKamar;
use App\Models\FasilitasHotel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.adminKamar', [
            'kamars' => Kamar::all()
        ]);
    }

    public function fasilitasKamar()
    {
        return view('admin.fasilitasKamar', [
            'fasilitas_kamars' => FasilitasKamar::all()
        ]);
    }

    public function fasilitasHotel()
    {
        return view('admin.fasilitasHotel', [
            'fasilitas_hotels' => FasilitasHotel::all()
        ]);
    }
}
