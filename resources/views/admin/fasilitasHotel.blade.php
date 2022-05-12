@extends('admin.layouts.main')

@section('container')
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