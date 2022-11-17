@extends('layouts.adminApp')
@section('title', 'Profile')
@section('content')
<div class="page-wrapper">
    @foreach ($user as $user)
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Profile page</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Profile Page</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-12">
                <div class="white-box">
                    <div class="user-bg"> <img width="100%" alt="user"
                            src="{{ url('admin/plugins/images/large/img1.jpg') }}">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img src="{{ url('admin/plugins/images/users/genu.jpg') }}"
                                        class="thumb-lg img-circle" alt="img"></a>
                                <h4 class="text-white mt-2">{{ $user->name }}</h4>
                                <h5 class="text-white mt-2">{{ $user->email }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Full Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="{{ $user->name }}" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="email" placeholder="{{ $user->email }}"
                                        class="form-control p-0 border-0" name="example-email" id="example-email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Password</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="password" value="password" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Phone No</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="123 456 7890" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12">Select Country</label>

                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none p-0 border-0 form-control-line">
                                        <option>London</option>
                                        <option>India</option>
                                        <option>Usa</option>
                                        <option>Canada</option>
                                        <option>Thailand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection