<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\FasilitasHotel;

class FasilitasHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelola_fasilitas_hotel', [
            'fasilitas_hotel' => FasilitasHotel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama_fasilitas' => 'required',
            'keterangan' => 'required',
            'image' => 'required|image|file|max:5000'
        ]);

        $validatedData['image'] = $request->file('image')->store('fasilitas-hotel');

        FasilitasHotel::create($validatedData);

        return redirect('/kelola_fasilitas_hotel')->with('success', 'Data baru berhasil ditambahkan!');
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
    public function edit(FasilitasHotel $kelola_fasilitas_hotel)
    {
        return $kelola_fasilitas_hotel;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FasilitasHotel $kelola_fasilitas_hotel)
    {
        $validatedData = $request->validate([
            'nama_fasilitas' => 'required',
            'keterangan' => 'required',
            'image' => 'required|image|file|max:5000'
        ]);

        Storage::delete($kelola_fasilitas_hotel->image);
        $validatedData['image'] = $request->file('image')->store('fasilitas-hotel');

        FasilitasHotel::find($kelola_fasilitas_hotel->id)
                        ->update($validatedData);

        return redirect('/kelola_fasilitas_hotel')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasHotel $kelola_fasilitas_hotel)
    {
        Storage::delete($kelola_fasilitas_hotel->image);
        FasilitasHotel::destroy($kelola_fasilitas_hotel->id);
        return redirect('/kelola_fasilitas_hotel')->with('success', 'Data berhasil dihapus!');
    }
}
