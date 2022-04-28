@extends('layouts.main')

@section('container')
    <h2 class="mb-4">Login</h2>

    <form>
        <div class="row">
            <div class="col-6 mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Alamat Email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
        </div>
        <div class="row">
            <div class="col-6 justify-content-between align-items-center d-flex">
                <a href="/register">Belum terdaftar?</a>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
@endsection