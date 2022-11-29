@extends('layouts.adminApp')
@section('title', 'Divisi')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Divisi</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <form action="{{url('/admin-divisions/search')}}" method="GET" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Cari...">
                                <button type="submit" class="btn btn-info">
                                    <i class="fas fa-search fa-sm"></i> Cari
                                </button>
                                </span>
                            </div>
                        </form>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <a href="{{ url('/admin-divisions/add') }}" class="btn btn-primary text-white">Tambah</a>
                </div>
                <div class="table-responsive">
                    <table class="table word-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">No</th>
                                <th class="border-top-0">Divisi</th>
                                <th class="border-top-0">Gambar</th>
                                <th class="border-top-0">Pegawai</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($divisions as $div)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td class="txt-oflo">{{ $div->division }}</td>
                                <td><img style="height: 50px" src="{{ Storage::url($div->image) }}" alt=""></td>
                                <td>{{ $div->employee }}</td>
                                <td>
                                    <a class="btn btn-warning text-white me-1"
                                        href="{{ url('/admin-divisions/edit', $div->id) }}">Edit</a>
                                    <form onsubmit="return confirm('Data akan dihapus?')" class='d-inline'
                                        action="{{ url('/admin-divisions', $div->id) }}" method="post">
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
                <div class="d-flex justify-content-end mt-3">
                    {!! $divisions->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection