@extends('layouts.adminApp')
@section('title', 'Edit Berita')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Edit Berita</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Edit Berita</a></li>
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
                    <form action="{{ url('/admin-publications/update',$publications->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="text" class="form-control" id="date" name="date"
                                value="{{ $publications->date }}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <td><img style="height: 100px" class="mb-4" src="{{ Storage::url($publications->image) }}"
                                alt=""></td>
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $publications->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Konten</label>
                            <textarea name="content" id="task-textarea" class="form-control" cols="30"
                                rows="10">{{ $publications->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success text-white">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    ClassicEditor
            .create( document.querySelector( '#task-textarea' ) , {
                ckfinder: {
                uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
                }
            })
            .catch( error => {
                console.error( error );
            } );
</script>
@endsection