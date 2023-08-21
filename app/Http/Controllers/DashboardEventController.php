<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.index',[
            'active' => 'dash_events',
            'events'   => Event::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create',[
            'active' => 'dash_events'
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
            'body'          => 'required',
        ]);

        if ($request -> file('image')) {
            $validatedData['image'] = $request->file('image')->store('event-images');
        }

        $validatedData['slug']    = Str::slug($request->title);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        // Memeriksa keunikan slug
        $validatedData['slug'] = Validator::make(['slug' => $validatedData['slug']],['slug' => 'required|unique:events,slug'])->validate()['slug'];

        Event::create($validatedData);

        return redirect('/admin/events')->with('success', 'New event has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', [
            'active' => 'dash_events',
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit',[
            'active' => 'dash_events',
            'event'  => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $rules = [
            'title'         => 'required|min:3|max:255',
            'image'         => 'image|file|max:2048',
            'body'          => 'required'

        ];

        $validatedData= $request->validate($rules);

        if (Str::slug($request->title) != $event->slug){
            $validatedData['slug'] = Str::slug($request->title);
        }
        
        if ($request -> file('image')) {
            if($event->image){
                Storage::delete($event->image);
            }
            $validatedData['image'] = $request->file('image')->store('event-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Event::where('id', $event->id)->update($validatedData);

        return redirect('/admin/events')->with('warning', 'Event has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if($event->image){
            Storage::delete($event->image);
        }
        Event::destroy($event->id);

        return redirect('/admin/events')->with('danger', 'Event has been deleted!');
    }
}
