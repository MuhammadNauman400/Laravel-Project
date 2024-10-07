<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontPostController extends Controller  
{
    public function index(Request $request) 
    {
        $posts = Post::all();
        
        return view('frontend.posts', compact('posts'));
    }
}
