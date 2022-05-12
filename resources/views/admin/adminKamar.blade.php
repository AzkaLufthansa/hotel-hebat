@extends('admin.layouts.main')

@section('container')
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipe Kamar</th>
                <th scope="col">Jumlah Kamar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kamars as $kamar)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $kamar->tipe_kamar }}</td>
                <td>{{ $kamar->jumlah_kamar }}</td>
                <td>
                    <a href="#" class="badge bg-warning text-decoration-none">Ubah</a>
                    <a href="#" class="badge bg-success text-decoration-none">Lihat</a>
                    <a href="#" class="badge bg-danger text-decoration-none">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Tombol Tambah Data --}}
    <div class="justify-content-end d-flex mt-4">
        <a href="#">
            <i class="fa fa-plus-circle fs-1 text-dark"></i>
        </a>
    </div>
</div>
@endsection