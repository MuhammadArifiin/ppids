@extends('layouts.adminApp')
@section('title', 'Edit Pengelola')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Edit Pengelola</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Edit Pengelola</a></li>
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

                    <form action="{{ url('/admin-divisions/update',$divisions->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <select class="form-control" name="division" id="exampleFormControlSelect1">
                            <option   {{ $divisions->division == "Ketua PPIDS UPR" ? 'selected' : '' }}>Ketua PPIDS UPR</option>
                            <option  {{ $divisions->division == "Sekretaris PPIDS UPR" ? 'selected' : '' }}>Sekretaris PPIDS UPR</option>
                            <option  {{ $divisions->division == "Bidang Infrastruktur dan Pengelolaan Informasi Spasial PPIDS UPR" ? 'selected' : '' }}>Bidang Infrastruktur dan Pengelolaan Informasi Spasial PPIDS UPR</option>
                            <option {{ $divisions->division == "Bidang Penelitian dan Pengembangan PPIDS UPR" ? 'selected' : '' }} >Bidang Penelitian dan Pengembangan PPIDS UPR</option>
                            <option   {{ $divisions->division == "Bidang Pendidikan dan Pelatihan PPIDS UPR" ? 'selected' : '' }}>Bidang Pendidikan dan Pelatihan PPIDS UPR</option>
                            <option  {{ $divisions->division == "Bidang Kerjasama PPIDS UPR" ? 'selected' : '' }}>Bidang Kerjasama PPIDS UPR</option>
                          </select>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <td><img style="height: 100px" class="mb-4" src="{{ Storage::url($divisions->image) }}" alt="">
                        </td>
                        <div class="mb-3">
                            <label for="employee" class="form-label">Pengelola</label>
                            <input type="text" class="form-control" id="employee" name="employee"
                                value="{{ $divisions->employee }}">
                        </div>

                        <button type="submit" class="btn btn-success text-white">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection