<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
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
        return view('acara', [
            "title" => 'All Event ' . $title,
            "active" => 'all_event',
            "events" => Event::latest()->filter(request(['search_event']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Event $event)
    {
        // dd($post);
        return view('single_acara', [
            "title"     => 'single event',
            "active"    => 'event',
            "event"      => $event,
            "events"     => Event::latest()->take(3)->get()
        ]);
    }
}
