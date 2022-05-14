<header class="container my-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1>Hotel Hebat</h1>
        
        {{-- Navigation Bar --}}
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('adminKamar') ? 'disabled text-decoration-underline' : '' }}" aria-current="page" href="/adminKamar">Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('fasilitasKamar') ? 'disabled text-decoration-underline' : '' }}" href="/fasilitasKamar">Fasilitas Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('fasilitasHotel') ? 'disabled text-decoration-underline' : '' }}" href="/fasilitasHotel">Fasilitas Hotel</a>
            </li>

            @auth
            <li class="nav-item">
                <a class="nav-link" href="/logout" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout <i class="fa fa-sign-out"></i></a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link {{ Request::is('login', 'register') ? 'disabled text-decoration-underline' : '' }}" href="/login">Login</a>
            </li>
            @endauth

        </ul>
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