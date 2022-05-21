<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class ResepsionisController extends Controller
{
    public function index()
    {
        return view('resepsionis.index', [
            'pesanan' => Pesanan::searching()->get()
        ]);
    }

    public function konfirmasi(Request $request)
    {
        $pesanan = Pesanan::find($request->id);

        if($pesanan->status === 2) {
            return redirect('/resepsionis')->with('konfirmasi_gagal', 'Status pesanan sudah di konfirmasi!');
        }
        
        $pesanan->update(['status' => 2]);

        return redirect('/resepsionis')->with('success', 'Pesanan berhasil di konfirmasi!');
    }
}
