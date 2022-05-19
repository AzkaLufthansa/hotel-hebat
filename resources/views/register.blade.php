@extends('layouts.main')

@section('container')
    <h2 class="mb-4">Register</h2>
            
    {{-- Form Register --}}
    {{-- <form action="/register" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                @error('name')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="Alamat Email" required>
                @error('email')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                @error('password')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col justify-content-between align-items-center d-flex">
                <a href="/login">Sudah terdaftar?</a>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
    </form> --}}

    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card bg-light shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-body">
                                <form action="/register" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="name" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="email" class="form-label">Alamat Email</label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="Alamat Email" required>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                            @enderror
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