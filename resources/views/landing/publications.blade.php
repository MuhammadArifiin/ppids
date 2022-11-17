@extends('layouts.app')
@section('title', 'Publications')
@section('content')
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Publications</h6>
                    <h1>List of Publications</h1>
                    <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($publications as $post)
            <div class="col-md-4 mb-4">
                <article class="blog-post">
                    <img src="{{ Storage::url($post->image) }}" alt="">
                    <div class="content">
                        <small>{{ $post->date }}</small> |
                        <small>{{ $post->author }}</small>
                        <h5>{{ $post->title }}</h5>
                        <p>{{ $post->content }}</p>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection