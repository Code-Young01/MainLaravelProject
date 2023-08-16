<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController 
{
    public function index()
    {
        $posts = Post::get();
    
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $id)
    {        
        return view('posts.show', ['post' => $id]);
    }

    public function create() 
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required']
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status', 'Post created!');

        return to_route('posts.index');
    }
}