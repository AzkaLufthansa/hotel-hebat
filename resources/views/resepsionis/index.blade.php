@extends('resepsionis.layouts.main')

@section('container')

{{-- Jika login berhasil --}}
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- Jika konfirmasi gagal --}}
@if(session()->has('konfirmasi_gagal'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('konfirmasi_gagal') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- Form Filter --}}
<form action="/resepsionis" method="get" class="row justify-content-between">
    <div class="col-3 mb-3">
        <div class="input-group date" id="datepicker">
            <input type="text" name="input" class="form-control @error('checkin') is-invalid @enderror" autocomplete="off" placeholder="Berdasarkan tanggal cek in" value="{{ request('input') }}">
            <span class="input-group-append">
                <span class="input-group-text bg-white d-block">
                    <i class="fa fa-calendar"></i>
                </span>
            </span>
            @error('tanggal')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
    </div>

{{-- Form Search --}}
    <div class="col-3 mb-3">
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Masukan nama tamu" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('keyword') }}" autocomplete="off">
            {{-- <button class="btn btn-danger" type="reset" value="reset" id="button-addon2">Reset</button> --}}
            <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
        </div>
    </div>
</form>

{{-- Tabel --}}
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Tamu</th>
                <th scope="col">Tanggal Cek In</th>
                <th scope="col">Tanggal Cek Out</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesanan as $p)
            <tr>
                <th scope="row">1</th>
                <td>{{ $p->nama_tamu }}</td>
                <td>{{ $p->cek_in }}</td>
                <td>{{ $p->cek_out }}</td>
                <td>
                    @if ($p->status === 1)
                        <span class="badge bg-warning">Belum di Konfirmasi</span>
                    @else
                        <span class="badge bg-success">Sudah di Konfirmasi</span>
                    @endif
                </td>
                <td>
                    <form action="/konfirmasi" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $p->id }}">
                        <button type="submit" class="badge bg-primary border-0" onclick="return confirm('Konfirmasi pesanan ini?')">Cek In</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection