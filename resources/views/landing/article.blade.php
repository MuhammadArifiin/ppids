@extends('layouts.app')
@section('title', 'Article')
@section('content')
<section id="services">
    <div class="container">
        <h3 class="text-start">{{ $publications->title }}</h3>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="service">
                    <img src="{{ Storage::url($publications->image) }}" style="width:100%;height:auto;" class="mb-3" alt="">
                    <div class="detail my-3">
                        <small>{{ $publications->date }}</small> | <small>{{ $publications->author }}</small>
                    </div>
                    <p>{!! $publications->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection