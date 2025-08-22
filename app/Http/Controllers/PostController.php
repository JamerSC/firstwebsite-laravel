<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all(); // get all posts (or array of posts) in the database
        return view('posts.index', compact('posts'));
        // 1st parameter View, 2nd param passing an array 
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
        $valitadated = $request->validate([
            'title'=> 'required',
            'body' => 'required',
        ]);

        Post::create($valitadated);
        return redirect()->route('posts.index')->with('success','Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Post $post)
    // {
    //     //
    // }
    public function edit($id)
    {
        $post = Post::findOrFail( $id ); // find the post
        return view('posts.edit', compact('post')); // edit the post
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $valitadated = $request->validate([
            'title'=> 'required',
            'body' => 'required',
        ]);

        $post = Post::findOrFail( $id ); // find the post
        $post->update($valitadated); // update() function for data validated
        
        return redirect()->route('posts.index')->with('success','Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail( $id );
        $post->delete();
        
        return redirect()->route('posts.index')->with('success',
        'Post deleted successfully!');
    }
}
