@extends('layouts.app')
@section('title', 'Artikel')
@section('content')
<section id="services">
    <div class="container">
        <h3 class="text-start">{{ $publications->title }}</h3>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="service">
                    <div class="article d-flex justify-content-center">
                        <img src="{{ Storage::url($publications->image) }}" style="width:60%;height:auto;" class="mb-3" alt="">
                    </div>
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