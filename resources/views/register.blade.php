@extends('layouts.main')

@section('container')
    <h2 class="mb-4">Register</h2>

    <div class="row auth">
        {{-- Form Register --}}
        <div class="col-6">
            <form>
                <div class="row">
                    <div class="col mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                    </div>
                </div>
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
                        <a href="/login">Sudah terdaftar?</a>
                        <button type="submit" class="btn btn-primary">Register</button>
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