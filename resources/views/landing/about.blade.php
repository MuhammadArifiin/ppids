@extends('layouts.app')
@section('title', 'Tentang')
@section('content')
<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Tentang</h6>
                    <h1>Pusat Pengembangan Infrastruktur Informasi Data Spasial</h1>
                </div>
            </div>
        </div>
        @foreach ( $items as $item )
        <div class="row justify-content-center">
            <div class="col-lg-5 py-5">
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <div class="ms-4">
                                <p>{!! $item->about !!} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img style="height: 300" class="mb-4" src="{{ Storage::url($item->image) }}" alt="">
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection