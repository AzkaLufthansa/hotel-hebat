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
            'jml_kamar' => 'required',
            'nama_pemesan' => 'required',
            'email_pemesan' => 'required',
            'hp_pemesan' => 'required',
            'nama_tamu' => 'required',
            'kamar_id' => 'required'
        ]);

        Pesanan::create($validatedData);

        return redirect('/')->with('success_booking', 'Proses pemesanan berhasil!');
    }
}
