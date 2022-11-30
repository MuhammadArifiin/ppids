@extends('layouts.adminApp')
@section('title', 'Berita')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Berita</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <form action="{{url('/admin-publications/search')}}" method="GET" role="search">
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
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="d-md-flex mb-3">
                        <a href="{{ url('/admin-publications/add') }}" class="btn btn-primary text-white">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table word-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">No</th>
                                    <th class="border-top-0">Tanggal</th>
                                    <th class="border-top-0">Gambar</th>
                                    <th class="border-top-0">Judul</th>
                                    <th class="border-top-0">Konten</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach ($publications as $pub)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td class="txt-oflo">{{ $pub->date }}</td>
                                    <td><img style="height: 50px" src="{{ Storage::url($pub->image) }}" alt=""></td>
                                    <td class="txt-oflo">{!! Str::limit( $pub->title, 50) !!}</td>
                                    <td>{!! Str::limit($pub->content, 20) !!}</td>
                                    <td>
                                        <a class="btn btn-warning text-white me-1"
                                            href="{{ url('/admin-publications/edit', $pub->id) }}">Edit</a>
                                        <form onsubmit="return confirm('Data akan dihapus?')" class='d-inline'
                                            action="{{ url('/admin-publications', $pub->id) }}" method="post">
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
                        {!! $publications->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection