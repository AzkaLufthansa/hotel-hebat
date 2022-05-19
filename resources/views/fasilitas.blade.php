@extends('layouts.main')

@section('container')
<h2 class="mb-4">Fasilitas Hotel</h2>

<div class="row">
    @foreach ($fasilitas as $f)
    <div class="col-md-4 mb-4">
        <div class="card bg-light shadow-sm">
            <div class="card-body">
                <img src="{{ asset('storage/' . $f->image) }}" alt="{{ $f->nama_fasilitas }}" class="d-block w-100 " height="200">
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection