@extends('admin.layouts.main')

@section('container')
{{-- form --}}
<div class="card bg-light shadow-sm">
    <h5 class="card-header">Tambah Kamar</h5>
    <div class="card-body">
        <form action="/kelola_kamar" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <input type="text" id="tipe_kamar" name="tipe_kamar" class="form-control @error('tipe_kamar') is-invalid @enderror" placeholder="Tipe Kamar" value="{{ old('tipe_kamar') }}">
                @error('tipe_kamar')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="number" id="jumlah_kamar" name="jumlah_kamar" class="form-control @error('jumlah_kamar') is-invalid @enderror" placeholder="Jumlah Kamar" value="{{ old('jumlah_kamar') }}">
                @error('jumlah_kamar')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="justify-content-end d-flex">
                <a href="/kelola_kamar" class="btn btn-danger me-3">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection