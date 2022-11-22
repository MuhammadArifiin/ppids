@extends('layouts.adminApp')
@section('title', 'About')
@section('content')
<div class="page-wrapper">
   
    @if ($errors->any())
    <div class="alert alert-danger mt-2 mb-2">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if ($countAbout > 0)
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{ url('/admin-about-update-or-create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Full Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file"  name="image"
                                        class="form-control p-0 border-0">
                                </div>
                            </div>
                            <td><img style="height: 100px" class="mb-4" src="{{ Storage::url($item->image) }}"
                                alt=""></td>
                            <div class="mb-3">
                                <label for="about" class="form-label">Content</label>
                                <textarea name="about" id="task-textarea" class="form-control" cols="30" rows="10">{!! $item->about !!}</textarea>
                            </div>
    
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{ url('/admin-about-update-or-create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Full Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file" name="image"
                                        class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="about" class="form-label">Content</label>
                                <textarea name="about" id="task-textarea" class="form-control" cols="30" rows="10"></textarea>
                            </div>
    
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection


@section('scripts')
<script>
    ClassicEditor
            .create( document.querySelector( '#task-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
@endsection