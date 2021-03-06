<header class="container my-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1>Hotel Hebat</h1>
        
        {{-- Navigation Bar --}}
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'disabled text-decoration-underline' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('kamar') ? 'disabled text-decoration-underline' : '' }}" href="/kamar">Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('fasilitas') ? 'disabled text-decoration-underline' : '' }}" href="/fasilitas">Fasilitas</a>
            </li>

            @auth
            <li class="nav-item">
                <a class="nav-link" href="/logout" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link {{ Request::is('login', 'register') ? 'disabled text-decoration-underline' : '' }}" href="/login">Login</a>
            </li>
            @endauth

        </ul>
    </div>

    {{-- Jika berhasil logout, login, dan memesan --}}
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Jika gagal pesan --}}
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Pemesanan gagal!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- Hero Image --}}
    <div class="card bg-light shadow-sm mt-3">
        <div class="card-body">
            <img src="/img/hotel.jpg" alt="Hotel Hebat" class="d-block w-100" height="350">
        </div>
    </div>
</header>




{{-- Modal Box Logout --}}
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin untuk logout?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>