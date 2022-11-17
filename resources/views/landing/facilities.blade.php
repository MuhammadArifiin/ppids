@extends('layouts.app')
@section('title', 'Facilities')
@section('content')
<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Facilities</h6>
                    <h1>List of Facilities</h1>
                    <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                </div>
            </div>
        </div>
    </div>
    <div id="projects-slider" class="owl-theme owl-carousel">
        @foreach ($facilities as $fac)
        <div class="project">
            <div class="overlay"></div>
            <img src="{{ asset('img/project1.jpg') }}" alt="">
            <div class="content">
                <h2>{{ $fac->name }}</h2>
                <h6>{{ $fac->description }}</h6>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection