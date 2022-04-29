@extends('layouts.main')

@section('container')
    <h2 class="mb-4">Login</h2>

    <div class="row auth">
        <div class="col-6">

            {{-- Jika Registrasi Berhasil --}}
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            {{-- Jika Login Gagal --}}
            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            {{-- Form Login --}}
            <form action="/login" method="POST">
                @csrf
                <div class="row">
                    <div class="col mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Alamat Email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col justify-content-between align-items-center d-flex">
                        <a href="/register">Belum terdaftar?</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>

        {{-- Gambar --}}
        <div class="col-6">
            <img src="/img/hotel.jpg" alt="Hotel Hebat" class="border border-dark">
        </div>
    </div>

@endsection