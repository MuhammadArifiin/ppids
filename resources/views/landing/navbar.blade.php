<!-- TOP NAV -->
<div class="top-nav" id="home">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p> <i class='bx bxs-envelope'></i><a href="ppids@upr.ac.id" class="text-white">ppids@upr.ac.id</a></p>
                {{-- <p> <i class='bx bxs-phone-call'></i>+62 81234567890</p> --}}
            </div>
            {{-- <div class="col-auto social-icons">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-pinterest'></i></a>
            </div> --}}
        </div>
    </div>
</div>

<!-- BOTTOM NAV -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">PPIDS<span class="dot">.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('divisions') }}">Pengelola</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('facilities') }}">Fasilitas</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('publications') }}">Berita</a>
                </li>
            </ul>
            {{-- <a href="{{ url('/user/contact') }}" data-bs-toggle="modal" data-bs-target="#exampleModal"
                class="btn btn-brand ms-lg-3">Contact</a> --}}
        </div>
    </div>
</nav>