@extends('layouts.main')

@section('container')
    <h2 class="mb-4">Login</h2>

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
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="card bg-light shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <form action="/login" method="post">
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
                                                <div class="col justify-content-between align-items-end d-flex">
                                                    <a href="/register">Belum terdaftar?</a>
                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="/img/hotel.jpg" alt="Hotel Hebat" class="img-thumbnail d-block w-100" height="350">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection