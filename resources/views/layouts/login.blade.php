@extends('layouts.app')
@section('title', 'Login')
@section('content')
<section class="h-100">
    <div class="container h-100">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="row w-25">
                <form action="{{ url('/admin-check-login') }}" action="post">
                    @csrf
                    <h1 class="h3 my-20 fw-normal">Silakan Login</h1>
                    @error('noValid')
                    <div class="alert alert-danger">Email Atau Passowrd Salah</div>
                    @enderror
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating my-1">
                        <input type="password" name="password" class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-md btn-primary my-1" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection