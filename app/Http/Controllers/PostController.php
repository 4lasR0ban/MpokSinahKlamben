<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        
        $title = '';
        // if (request('category')) {
        //     $category = Category::firstWhere('slug', request('category'));
        //     $title = 'in ' . $category->name;
        // }
        // if (request('author')) {
        //     $author = User::firstWhere('username', request('author'));
        //     $title = 'by ' . $author->name;
        // }
        return view('berita', [
            "title" => 'All Post ' . $title,
            "active" => 'all_post',
            "posts" => Post::latest()->filter(request(['search_post']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        // dd($post);
        return view('artikel', [
            "title"     => 'single post',
            "active"    => 'post',
            "post"      => $post,
            "posts"     => Post::latest()->where("id", "!=", $post->id)->take(3)->get()
        ]);
    }
}
