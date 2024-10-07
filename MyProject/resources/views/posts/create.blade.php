@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create New Post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create New Post</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container d-flex justify-content-center align-items-center flex-column" style="min-height: 60vh;">
            <div class="card w-75">
                <div class="card-body">
                    <h1 class="text-center">Create New Post</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="Enter post title">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control" rows="5" placeholder="Enter post content">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-outline-success">Create Post</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-outline-primary">Back to Posts</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   
</div>
@endsection
