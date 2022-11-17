@extends('layouts.app')
@section('title', 'Login')
@section('content')
<section class="h-100">
    <div class="container h-100">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="row w-25">
                <form action="{{ url('/admin-dashboard') }}" action="post">
                    @csrf
                    <h1 class="h3 my-20 fw-normal">Please sign in</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating my-1">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-md btn-primary my-1" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection