@extends('backend.app')
@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Posts</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">AllPosts</li>
                        </ol>

                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <a href="{{ route('posts.create') }}" class="btn btn-outline-info mb-4">Create New Post</a>
            
            <form action="{{ route('posts.index') }}" method="GET" class="mb-4">
                <div class="row">
                    <div class="col-md-4"> 
                        <div class="input-group input-group-sm">
                            <input type="text" name="search" class="form-control" placeholder="Search Posts..."
                                value="{{ request()->query('search') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            @if ($posts->count() > 0)
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ Str::limit($post->content, 100) }}</td>
                                <td>
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" class="rounded" alt="Post Image"
                                            width="80" height="80">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-info"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-warning"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger"
                                            onclick="return confirm('Are you sure?')"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @else
                <p>No posts found.</p>
            @endif
            <tfoot>
                
            </tfoot>
            </table>
        </div>

    </div>


@endsection
