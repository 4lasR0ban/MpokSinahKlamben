<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\UmkmImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardUmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('umkms.index',[
            'active' => 'dash_umkms',
            'umkms'   => Umkm::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('umkms.create',[
            'active' => 'dash_umkms'
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
            'seller'        => 'required|min:3|max:255',
            'body'          => 'required',
        ]);

        if ($request -> file('image')) {
            $validatedData['image'] = $request->file('image')->store('umkm-images');
        }

        $validatedData['slug']    = Str::slug($request->title);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        // Memeriksa keunikan slug
        $validatedData['slug'] = Validator::make(['slug' => $validatedData['slug']],['slug' => 'required|unique:umkms,slug'])->validate()['slug'];

        Umkm::create($validatedData);

        $umkm_latest = Umkm::latest()->first()->id; 
        $i = 0;
        if ($request->images != null) {
            foreach($request->images as $key){
                $validatedData['umkms_id']  = $umkm_latest;
                $validatedData['title']     = $request->titles[$i];
                if ($request -> file('images')[$i]) {
                    $validatedData['image'] = $request->file('images')[$i]->store('umkm-images');
                }
                UmkmImage::create($validatedData);
                $i++;
            }
        }
        return redirect('/admin/umkms')->with('success', 'New UMKM has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function show(Umkm $umkm)
    {
        return view('umkms.show', [
            'active' => 'dash_umkms',
            'umkm' => $umkm
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function edit(Umkm $umkm)
    {
        return view('umkms.edit',[
            'active' => 'dash_umkms',
            'umkm'   => $umkm,
            'images' => UmkmImage::where('umkms_id', $umkm->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Umkm $umkm)
    {
        $rules = [
            'title'         => 'required|min:3|max:255',
            'image'         => 'image|file|max:2048',
            'seller'        => 'required|min:3|max:255',
            'body'          => 'required'

        ];

        $validatedData= $request->validate($rules);

        if (Str::slug($request->title) != $umkm->slug){
            $validatedData['slug'] = Str::slug($request->title);
        }
        
        if ($request -> file('image')) {
            if($umkm->image){
                Storage::delete($umkm->image);
            }
            $validatedData['image'] = $request->file('image')->store('umkm-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Umkm::where('id', $umkm->id)->update($validatedData);

        if ($request->images != null){
            $umkms_id = $umkm->id; 
            $i = 0;
            foreach($request->images as $key){
                $validatedData['umkms_id']  = $umkms_id;
                $validatedData['title']     = $request->titles[$i];
                if ($request -> file('images')[$i]) {
                    $validatedData['image'] = $request->file('images')[$i]->store('umkm-images');
                }
                UmkmImage::create($validatedData);
                $i++;
            }
        }

        return redirect('/admin/umkms')->with('warning', 'UMKM has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Umkm $umkm)
    {
        $umkmImage = UmkmImage::where('umkms_id', $umkm->id)->get();
        for($i=0; $i < count($umkmImage); $i++){
            Storage::delete($umkmImage[$i]->image);
        }

        if($umkm->image){
            Storage::delete($umkm->image);
        }
        Umkm::destroy($umkm->id);

        return redirect('/admin/umkms')->with('danger', 'UMKM has been deleted!');
    }
}
