@extends('layouts.adminApp')
@section('title', 'Divisions')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Divisions</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Divisions</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <a href="{{ url('/admin-divisions/add') }}" class="btn btn-primary text-white">Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table word-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Division</th>
                                <th class="border-top-0">Employee</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($divisions as $div)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td class="txt-oflo">{{ $div->division }}</td>
                                <td>{{ $div->employee }}</td>
                                <td>
                                    <a class="btn btn-warning text-white me-1"
                                        href="{{ url('/admin-divisions/edit', $div->id) }}">Update</a>
                                    <form onsubmit="return confirm('Data akan dihapus?')" class='d-inline'
                                        action="{{ url('/admin-divisions', $div->id) }}" method="get">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-white" type="submit">Delete</button>
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
</div>
@endsection