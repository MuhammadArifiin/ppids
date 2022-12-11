@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Kontak</h6>
                    <h1>Silakan Hubungi Kami</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($contact as $item)
            <div class="col-md-4">
                <h2>Email</h2>
                <p>{{$item->email}}</p>
                <h2>Telepon</h2>
                <p>{{$item->phone}}</p>
            </div>
            <div class="col-md-8">
                <iframe src="{{ $item->address }}" width="850" height="450" style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection