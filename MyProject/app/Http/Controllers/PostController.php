<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

public function index(Request $request)
{
    $search = $request->input('search');
    
    $posts = Post::query()
                ->when($search, function($query, $search) {
                    return $query->where('title', 'like', "%{$search}%")
                                 ->orWhere('content', 'like', "%{$search}%");
                })
                ->get();
    
    return view('posts.index', compact('posts'));
}

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
     
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); 
            $post->image = $imagePath; 
        }
    
        $post->save();
        return redirect()->route('posts.index');
    }
    

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {

        $post->title = $request->title;
        $post->content = $request->content;
    
        if ($request->hasFile('image')) {
        
            if ($post->image) {
                Storage::delete('public/' . $post->image);
            }
            $imagePath = $request->file('image')->store('images', 'public'); 
            $post->image = $imagePath; 
        }
    
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
