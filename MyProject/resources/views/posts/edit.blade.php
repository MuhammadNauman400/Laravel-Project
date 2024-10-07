@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Post</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container d-flex justify-content-center align-items-center flex-column" style="min-height: 60vh;">
            <div class="card w-75">
                <div class="card-body">
                    <h1 class="text-center">Edit Post</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control" rows="5">{{ old('content', $post->content) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload New Image</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                    
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" width="100">
                        @endif
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-outline-success">Update Post</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-outline-primary">Back to Posts</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
