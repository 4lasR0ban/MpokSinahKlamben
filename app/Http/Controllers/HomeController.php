<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Event;
use App\Models\Umkm;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title"     => 'Home',
            "active"    => 'Home',
            "events"    => Event::latest()->take(3)->get(),
            "posts"     => Post::latest()->take(3)->get(),
            "umkms"     => Umkm::latest()->take(3)->get(),
        ]);
    }
}
