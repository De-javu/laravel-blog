<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validateData = $request->validate([
           'title' => 'required|string|max:255',
           'category' => 'required|string|max:255',
           'content' => 'required|string',
       ]);

         $post = new Post();
            $post->title = $validateData['title'];
            $post->category = $validateData['category'];
            $post->content = $validateData['content'];

            $post->save();
            return redirect()->route('posts.index');
    
    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }
}