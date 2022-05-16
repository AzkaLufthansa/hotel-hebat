@extends('admin.layouts.main')

@section('container')

{{-- Jika Data Berhasil Ditambahkan --}}
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- Jika Data Gagal Ditambahkan --}}
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Tambah data gagal!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Fasilitas</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Image</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fasilitas_hotels as $fasilitas_hotel)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $fasilitas_hotel->nama_fasilitas }}</td>
                <td>{{ $fasilitas_hotel->keterangan }}</td>
                <td>{{ $fasilitas_hotel->image }}</td>
                <td>
                    <a href="#" class="badge bg-warning text-decoration-none">Ubah</a>
                    <a href="#" class="badge bg-success text-decoration-none">Lihat</a>
                    <form action="/kelola_fasilitas_hotel/{{ $fasilitas_hotel->id }}" method="post" class="d-inline">
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
        <a href="/kelola_fasilitas_hotel/create" data-bs-toggle="modal" data-bs-target="#modalForm">
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

            <form action="/kelola_fasilitas_hotel" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection