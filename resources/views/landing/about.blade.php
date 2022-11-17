@extends('layouts.app')
@section('title', 'About')
@section('content')
<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>About</h6>
                    <h1>Pusat Pengembangan Infrastruktur Informasi Data Spasial</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 py-5">
                <div class="row">
                    <div class="col-12">
                        <div class="info-box">
                            <img src="{{ asset('img/icon6.png') }}" alt="">
                            <div class="ms-4">
                                <h5>Digital Marketing</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <img src="{{ asset('img/icon4.png') }}" alt="">
                            <div class="ms-4">
                                <h5>E-mail Marketing</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <img src="{{ asset('img/icon5.png') }}" alt="">
                            <div class="ms-4">
                                <h5>Buisness Marketing</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="{{ asset('img/about.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection