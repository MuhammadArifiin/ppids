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

        <div class="row justify-content-end my-4">
            <div class="col-md-4">
                <form action="{{url('/search')}}" method="GET" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="find" placeholder="Search for">
                            <button type="submit" class="btn btn-info">
                                <i class="fas fa-search fa-sm"></i> Search
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach ($publications as $post)
            <div class="col-md-4 col-md-2 mb-4">
                <article class="blog-post">
                    <div class="thumbnail">
                        <img src="{{ Storage::url($post->image) }}" alt="">
                    </div>
                    <div class="content">
                        <small>{{ $post->date }}</small> |
                        <small>{{ $post->author }}</small>
                        <a href="{{ url('/publications', $post->id) }}" class="text-decoration-none">
                            <h5 class="content-title">{{ $post->title }}</h5>
                        </a>
                        <p class="text-justify">{!! \Illuminate\Support\Str::limit($post->content, 100) !!}</p>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection