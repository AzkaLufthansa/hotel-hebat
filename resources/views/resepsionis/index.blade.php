@extends('resepsionis.layouts.main')

@section('container')

<div class="row justify-content-between">
    {{-- Form Filter --}}
    <form action="" class="col-3 mb-3">
        <div class="input-group date" id="datepicker">
            <input type="text" name="checkin" class="form-control @error('checkin') is-invalid @enderror" autocomplete="off" placeholder="Berdasarkan tanggal Cek In">
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
            <input type="text" class="form-control" name="keyword" placeholder="Masukan Kata Kunci" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('keyword') }}">
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
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mr X</td>
                <td>15-01-2022</td>
                <td>17-01-2022</td>
                <td>
                    <a href="#" class="badge bg-warning text-decoration-none">Cek In</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection