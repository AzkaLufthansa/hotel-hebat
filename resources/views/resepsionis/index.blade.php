@extends('resepsionis.layouts.main')

@section('container')

{{-- Jika login berhasil --}}
@if(session()->has('success_login'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success_login') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- Jika konfirmasi berhasil --}}
@if(session()->has('konfirmasi_berhasil'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('konfirmasi_berhasil') }}
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

<div class="row justify-content-between">
    {{-- Form Filter --}}
    <form action="" class="col-3 mb-3">
        <div class="input-group date" id="datepicker">
            <input type="text" name="checkin" class="form-control @error('checkin') is-invalid @enderror" autocomplete="off" placeholder="Berdasarkan tanggal cek in">
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
    </form>

    {{-- Form Search --}}
    <form action="" class="col-3 mb-3">
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Masukan nama tamu" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('keyword') }}">
            <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
        </div>
    </form>
</div>

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