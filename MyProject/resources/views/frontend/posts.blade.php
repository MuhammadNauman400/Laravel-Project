@extends('frontend.app')

@section('abccontent')

<div class="container">

    @if ($posts->count() > 0)
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
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

@endsection