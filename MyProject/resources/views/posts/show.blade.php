@extends('backend.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Post Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Post Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container d-flex justify-content-center align-items-center flex-column" style="min-height: 60vh;">
            <div class="card w-75">
                <div class="card-body text-center">
                    <h1>{{ $post->title }}</h1>
                    <p>{{ $post->content }}</p>
                    @if($post->image)
                    <div>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" width="300">
                    </div>
                @else
                    <p>No image available for this post.</p>
                @endif
                   <br> <a href="{{ route('posts.index') }}" class="btn btn-outline-dark">Back to Posts</a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
