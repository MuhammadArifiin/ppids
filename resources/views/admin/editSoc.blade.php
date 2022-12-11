@extends('layouts.adminApp')
@section('title', 'Edit Sosial Media')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Edit Sosial Media</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Edit Sosial Media</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger mt-2 mb-2">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">

                    <form action="{{ url('/admin-manage-socmed/update',$data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Media Sosial</label>
                            <select class="form-control" name="name" id="exampleFormControlSelect1">
                                    <option selected>Choose</option>
                                    <option value="bx bxl-facebook">Facebook</option>
                                    <option value="bx bxl-twitter">Twitter</option>
                                    <option value="bx bxl-instagram">Instagram</option>
                                    <option value="bx bxl-linkedin">LinkedIn</option>
                                    <option value="bx bxl-youtube">Youtube</option>
                                </select>
                        </div>
                        </select>

                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control" id="link" name="link" value="{{ $data->link }}">
                        </div>

                        <button type="submit" class="btn btn-success text-white">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection