<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasKamar;
use App\Models\Kamar;

class FasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelola_fasilitas_kamar', [
            'fasilitas_kamar' => FasilitasKamar::with('kamar')->get(),
            'kamar' => Kamar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah_fasilitas_kamar', [
            'kamar' => Kamar::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kamar_id' => 'required',
            'nama_fasilitas' => 'required'
        ]);

        FasilitasKamar::create($validatedData);

        return redirect('/kelola_fasilitas_kamar')->with('success', 'Data baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasKamar $kelola_fasilitas_kamar)
    {
        return $kelola_fasilitas_kamar;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FasilitasKamar $kelola_fasilitas_kamar)
    {
        $validatedData = $request->validate([
            'kamar_id' => 'required',
            'nama_fasilitas' => 'required'
        ]);

        FasilitasKamar::find($kelola_fasilitas_kamar->id)
                        ->update($validatedData);

        return redirect('/kelola_fasilitas_kamar')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasKamar $kelola_fasilitas_kamar)
    {
        FasilitasKamar::destroy($kelola_fasilitas_kamar->id);
        return redirect('/kelola_fasilitas_kamar')->with('success', 'Data berhasil dihapus!');
    }
}
