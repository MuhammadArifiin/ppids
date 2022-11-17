@extends('layouts.app')
@section('title', 'Divisions')
@section('content')
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Divisions</h6>
                    <h1>List of Divisions</h1>
                    <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($divisions as $div)
            <div class="col-lg-4 col-md-8">
                <div class="team-member">
                    <div class="image">
                        <img src="{{ Storage::url($div->image) }}" alt="">
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <h5>{{ $div->employee }}</h5>
                    <p>{{ $div->division }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection