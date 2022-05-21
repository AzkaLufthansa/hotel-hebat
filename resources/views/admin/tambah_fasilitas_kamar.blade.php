@extends('admin.layouts.main')

@section('container')
{{-- form --}}
<div class="card bg-light shadow-sm">
    <h5 class="card-header">Tambah Fasilitas Kamar</h5>
    <div class="card-body">
        <form action="/kelola_fasilitas_kamar" method="post">
            @csrf
            <div class="input-group mb-3">
                <select class="form-select" id="kamar_id" name="kamar_id" aria-label="Default select example">
                    @foreach ($kamar as $k)
                    <option value="{{ $k->id }}">{{ $k->tipe_kamar }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <input type="text" id="nama_fasilitas" name="nama_fasilitas" class="form-control @error('nama_fasilitas') is-invalid @enderror" placeholder="Nama Fasilitas">
                @error('nama_fasilitas')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="justify-content-end d-flex">
                <a href="/kelola_fasilitas_kamar" class="btn btn-danger me-3">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection