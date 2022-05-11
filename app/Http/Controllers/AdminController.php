<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.adminKamar');
    }

    public function fasilitasKamar()
    {
        return view('admin.fasilitasKamar');
    }

    public function fasilitasHotel()
    {
        return view('admin.fasilitasHotel');
    }
}
