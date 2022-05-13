@extends('admin.layouts.main')

@section('container')

{{-- Alert Jika Data Berhasil Ditambahkan --}}
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipe Kamar</th>
                <th scope="col">Jumlah Kamar</th>
                <th scope="col">Image</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kamars as $kamar)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $kamar->tipe_kamar }}</td>
                <td>{{ $kamar->jumlah_kamar }}</td>
                <td>{{ $kamar->image }}</td>
                <td>
                    <a href="#" class="badge bg-warning text-decoration-none">Ubah</a>
                    <a href="#" class="badge bg-success text-decoration-none">Lihat</a>
                    <form action="/adminKamar/{{ $kamar->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Tombol Tambah Data --}}
    <div class="justify-content-end d-flex mt-4">
        <a href="/adminKamar/create" data-bs-toggle="modal" data-bs-target="#modalForm">
            <i class="fa fa-plus-circle fs-1 text-dark"></i>
        </a>
    </div>
</div>






{{-- Modal Form --}}
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/adminKamar" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
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
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile" name="image">
                        @error('image')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection