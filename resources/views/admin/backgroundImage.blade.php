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
                <h4 class="page-title">Background Image Home</h4>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="d-md-flex mb-3">
                        <a href="{{ url('/admin-backgroundImage/add') }}" class="btn btn-primary text-white">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table word-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">No</th>
                                    <th class="border-top-0">Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach ($backgroundImages as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>      
                                    <td><img style="height: 50px" src="{{ Storage::url($item->image) }}" alt=""></td> 
                                    <td>
                                        <a class="btn btn-warning text-white me-1"
                                            href="{{ url('/admin-backgroundImage/edit', $item->id) }}">Edit</a>
                                        <form onsubmit="return confirm('Data akan dihapus?')" class='d-inline'
                                            action="{{ url('/admin-backgroundImage', $item->id) }}" method="post">
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
                        {!! $backgroundImages->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection