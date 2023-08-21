<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Event;
use App\Models\Umkm;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index', [
            'active'    => 'dash',
            'users'     => User::count(),
            'posts'     => Post::count(),
            'events'    => Event::count(),
            'umkms'     => Umkm::count()
        ]);
    }
}
