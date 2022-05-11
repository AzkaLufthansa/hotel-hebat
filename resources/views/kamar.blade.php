@extends('layouts.main')

@section('container')
    @foreach ($kamars as $kamar)
    <h2>Kamar {{ $kamar->tipe_kamar }}</h2>
    <p>Fasilitas : </p>
    <ul>
        @foreach ($kamar->fasilitas as $fasilitas)
        <li>{{ $fasilitas->nama_fasilitas }}</li>
        @endforeach
    </ul>
    
    <div class="kamar border border-dark mb-5">
        <img src="/img/{{ $kamar->image }}" alt="Kamar Superior">
    </div>
    @endforeach
@endsection