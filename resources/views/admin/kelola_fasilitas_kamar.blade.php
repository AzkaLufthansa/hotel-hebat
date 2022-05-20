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
                <th scope="col">Tipe Kamar</th>
                <th scope="col">Nama Fasilitas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fasilitas_kamar as $fk)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $fk->kamar->tipe_kamar }}</td>
                <td>{{ $fk->nama_fasilitas }}</td>
                <td>
                    <a href="#" class="badge bg-warning text-decoration-none edit-fasilitas-kamar" data-bs-toggle="modal" data-bs-target="#modalForm" data-id="{{ $fk->id }}">Ubah</a>
                    <form action="/kelola_fasilitas_kamar/{{ $fk->id }}" method="post" class="d-inline">
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
        <a href="/kelola_fasilitas_kamar/create" data-bs-toggle="modal" data-bs-target="#modalForm">
            <i class="fa-solid fa-circle-plus fs-1 text-dark"></i>
        </a>
    </div>
</div>






{{-- Modal Form --}}
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel"Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/kelola_fasilitas_kamar" method="post">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <select class="form-select" id="kamar_id" name="kamar_id" aria-label="Default select example">
                            @foreach ($kamar as $k)
                            <option value="{{ $k->id }}">{{ $k->tipe_kamar }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-group">
                        <input type="text" id="nama_fasilitas" name="nama_fasilitas" class="form-control @error('nama_fasilitas') is-invalid @enderror" placeholder="Nama Fasilitas">
                        @error('nama_fasilitas')
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