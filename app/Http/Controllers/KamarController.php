<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Kamar;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelola_kamar', [
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
            'tipe_kamar' => 'required',
            'jumlah_kamar' => 'required|numeric',
            'image' => 'required|image|file|max:5000'
        ]);

        $validatedData['image'] = $request->file('image')->store('kamar-images');

        Kamar::create($validatedData);

        return redirect('/kelola_kamar')->with('success', 'Data baru berhasil ditambahkan!');
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
    public function edit(Kamar $kelola_kamar)
    {
        return $kelola_kamar;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kelola_kamar)
    {
        $validatedData = $request->validate([
            'tipe_kamar' => 'required',
            'jumlah_kamar' => 'required|numeric',
            'image' => 'required|image|file|max:5000'
        ]);

        Storage::delete($kelola_kamar->image);
        $validatedData['image'] = $request->file('image')->store('kamar-images');

        Kamar::find($kelola_kamar->id)
                    ->update($validatedData);

        return redirect('/kelola_kamar')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kelola_kamar)
    {
        Storage::delete($kelola_kamar->image);
        Kamar::destroy($kelola_kamar->id);
        return redirect('/kelola_kamar')->with('success', 'Data berhasil dihapus!');
    }
}
