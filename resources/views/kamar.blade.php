@extends('layouts.main')

@section('container')
    <h2 class="mb-4">Tipe Kamar</h2>

    @foreach ($kamar as $k)
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card bg-light shadow-sm">
                <div class="h5 card-header">
                    Kamar {{ $k->tipe_kamar }}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-body">
                                <p class="card-text">Fasilitas:</p>
                                <ul>
                                    @foreach ($k->fasilitas as $fasilitas)
                                    <li>{{ $fasilitas->nama_fasilitas }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <img src="{{ asset('storage/' . $k->image) }}" alt="Kamar {{ $k->tipe_kamar }}" class="img-thumbnail d-block w-100" height="350">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection