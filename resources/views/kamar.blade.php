@extends('layouts.main')

@section('container')
    @foreach ($kamar as $k)
    <h2>Kamar {{ $k->tipe_kamar }}</h2>
    <p>Fasilitas : </p>
    <ul>
        @foreach ($k->fasilitas as $fasilitas)
        <li>{{ $fasilitas->nama_fasilitas }}</li>
        @endforeach
    </ul>
    
    <div class="kamar border border-dark mb-5">
        <img src="{{ asset('storage/' . $k->image) }}" alt="Kamar Superior">
    </div>
    @endforeach
@endsection