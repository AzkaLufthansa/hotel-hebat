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
                    <a href="#">Ubah</a>
                    <a href="#">Lihat</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection