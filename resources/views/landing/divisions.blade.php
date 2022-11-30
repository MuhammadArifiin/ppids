@extends('layouts.app')
@section('title', 'Pengelola')
@section('content')
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Pengelola</h6>
                    <h1>Daftar Pengelola</h1>
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
                        <div class="thumbnail">
                            <img src="{{ Storage::url($div->image) }}" alt="">
                        </div>
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