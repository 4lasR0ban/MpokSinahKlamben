<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index',[
            'active' => 'dash_posts',
            'posts'   => Post::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create',[
            'active' => 'dash_posts'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'         => 'required|min:3|max:255',
            'image'         => 'image|file|max:2048',
            'author'        => 'required|min:3|max:255',
            'body'          => 'required',
        ]);

        if ($request -> file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['slug']    = Str::slug($request->title);
        
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);

        // Memeriksa keunikan slug
        $validatedData['slug'] = Validator::make(['slug' => $validatedData['slug']],['slug' => 'required|unique:posts,slug'])->validate()['slug'];

        Post::create($validatedData);

        return redirect('/admin/posts')->with('success', 'New Post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', [
            'active' => 'dash_posts',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',[
            'active' => 'dash_posts',
            'post'  => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title'         => 'required|min:3|max:255',
            'image'         => 'image|file|max:2048',
            'author'        => 'required|min:3|max:255',
            'body'          => 'required'

        ];

        $validatedData= $request->validate($rules);

        if (Str::slug($request->title) != $post->slug){
            $validatedData['slug'] = Str::slug($request->title);
        }
        
        if ($request -> file('image')) {
            if($post->image){
                Storage::delete($post->image);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)->update($validatedData);

        return redirect('/admin/posts')->with('warning', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        return redirect('/admin/posts')->with('danger', 'Post has been deleted!');
    }
}
