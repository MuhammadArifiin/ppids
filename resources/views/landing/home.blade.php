@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
<!-- SLIDER -->
<div class="owl-carousel owl-theme hero-slider">

    @foreach ($backgroundImage as $item)
    <div class="slide slide1" style="background-image: url('{{  Storage::url($item->image)  }}')">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <h6 class="text-white text-uppercase">PPIDS universitas palangka raya</h6>
                    <h1 class="display-3 my-4">Pusat Pengembangan infrastruktur<br /> informasi data spasial</h1>
                    <a href="{{ url('/about') }}" class="btn btn-brand">Tentang</a>
                    <a href="{{ url('/publications') }}" class="btn btn-outline-light ms-3">Berita</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Aktivitas</h6>
                    <h1>Seputar PPIDS</h1>
                </div>
            </div>
        </div>
        @if ($managePublication === 1)
        <div class="row justify-content-end my-4">
            <div class="col-md-4">
                <form action="{{url('/search')}}" method="GET" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="find" placeholder="Cari...">
                        <button type="submit" class="btn btn-info">
                            <i class="fas fa-search fa-sm"></i> Cari
                        </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        @endif


        @if ($managePublication === 1)
        <div class="row">
            <div class="col-md-8">
                <h3 class="text-start">Terbaru</h3>
                @foreach ($publications as $pub)
                @php
                $data = $pub->created_at;
                $date = Carbon\Carbon::parse($data);
                $elapsed = $data->diffForHumans();
                @endphp
                <div class="service mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ Storage::url($pub->image) }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('/publications', $pub->id) }}" class="text-decoration-none">
                                <h5 class="content-title">{{ $pub->title }}</h5>
                            </a>
                            <p class="text-justify">{!! \Illuminate\Support\Str::limit($pub->content, 200) !!}</p>
                            <small class="mb-4">{{ $elapsed }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-md-4">
                <h3 class="text-start">Populer</h3>
                <div class="service">
                    @foreach ($mostViewed as $msv)
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ url('/publications', $msv->id) }}" class="text-decoration-none">
                                <h5 class="content-title">{{ $msv->title }}</h5>
                            </a>
                            <hr>
                        </li>
                        <li>
                            <p class="text-justify">{!! \Illuminate\Support\Str::limit($msv->content, 80) !!}</p>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
        @endif


        @if ($managePublication == 1)
        <div class="d-flex justify-content-start">
            {!! $publications->links() !!}
        </div>
        @endif
    </div>
</section>
@endsection