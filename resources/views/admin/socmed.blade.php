@extends('layouts.adminApp')
@section('title', 'Sosial Media')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Sosial Media</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Sosial Media</a></li>
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
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <a href="{{ url('/admin-manage-socmed/add') }}" class="btn btn-primary text-white">Tambah</a>
                </div>
                <div class="table-responsive">
                    <table class="table word-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">No</th>
                                <th class="border-top-0">Media Sosial</th>
                                <th class="border-top-0">URL</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td class="txt-oflo">{{ $item->name }}</td>
                                <td>{{ $item->link }}</td>
                                <td>
                                    <a class="btn {{ $item->active == 1 ? 'btn-primary' : 'btn-danger' }}"
                                        href="{{ url('/admin-manage-socmed-change', $item->id) }}">Active</a>
                                    <a class="btn btn-warning text-white me-1"
                                        href="{{ url('/admin-manage-socmed/edit', $item->id) }}">Edit</a>
                                    <form onsubmit="return confirm('Data akan dihapus?')" class='d-inline'
                                        action="{{ url('/admin-manage-socmed', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-white" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection