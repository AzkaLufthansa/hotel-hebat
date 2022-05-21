<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PemesananController extends Controller
{
    public function pesan(Request $request)
    {
        $validatedData = $request->validate([
            'cek_in' => 'required',
            'cek_out' => 'required',
            'jml_kamar' => 'required|numeric',
            'nama_pemesan' => 'required',
            'email_pemesan' => 'required|email:dns',
            'hp_pemesan' => 'required|numeric',
            'nama_tamu' => 'required',
            'kamar_id' => 'required'
        ]);

        Pesanan::create($validatedData);

        return redirect('/')->with('success', 'Proses pemesanan berhasil!');
    }
}
