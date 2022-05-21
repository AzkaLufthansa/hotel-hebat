@extends('admin.layouts.main')

@section('container')
{{-- form --}}
<div class="card bg-light shadow-sm">
    <h5 class="card-header">Tambah Fasilitas Hotel</h5>
    <div class="card-body">
        <form action="/kelola_fasilitas_hotel" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <input type="text" id="nama_fasilitas" name="nama_fasilitas" class="form-control @error('nama_fasilitas') is-invalid @enderror" placeholder="Nama Fasilitas" value="{{ old('nama_fasilitas') }}">
                @error('nama_fasilitas')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="text" id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Keterangan" value="{{ old('keterangan') }}">
                @error('keterangan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile" name="image">
                @error('image')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="justify-content-end d-flex">
                <a href="/kelola_fasilitas_hotel" class="btn btn-danger me-3">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection