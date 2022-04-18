<header class="container mt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="d-inline">Hotel Hebat</h1>
    
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
        </ul>
    </div>

    <div class="container mt-4 mb-5 p-5 border">
     
    </div>
</header>