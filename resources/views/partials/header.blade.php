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
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link logout-button" onclick="return confirm('Logout?')">Logout</button>
                </form>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link {{ Request::is('login', 'register') ? 'disabled text-decoration-underline' : '' }}" href="/login">Login</a>
            </li>
            @endauth

        </ul>
    </div>

    {{-- Hero Image --}}
    <div class="hero mt-4 border border-dark">
        <img src="/img/hotel.jpg" alt="Hotel Hebat">
    </div>
</header>