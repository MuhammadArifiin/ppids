<!-- TOP NAV -->
<div class="top-nav" id="home">
    <div class="container">
        <marquee>Pusat Pengembangan Infrastruktur Informasi Data Spasial Universitas Palangka Raya</marquee>
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

                @if($manageAbout == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">Tentang</a>
                </li>
                @endif

                @if ($manageDivision == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('divisions') }}">Pengelola</a>
                </li>
                @endif

                @if ($manageFacility == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('facilities') }}">Fasilitas</a>
                </li>
                @endif

                @if ($managePublication == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('publications') }}">Berita</a>
                </li>
                @endif

                @if ($manageContact == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact') }}">Kontak</a>
                </li>
                @endif
            </ul>
            {{-- <a href="{{ url('/user/contact') }}" data-bs-toggle="modal" data-bs-target="#exampleModal"
                class="btn btn-brand ms-lg-3">Contact</a> --}}
        </div>
    </div>
</nav>