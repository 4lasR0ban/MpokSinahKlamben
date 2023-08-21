<?php

namespace App\Http\Controllers;

use App\Models\UmkmImage;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardUmkmImageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $umkm = Umkm::where('id', $id)->first();
        $images = UmkmImage::where('umkms_id', $id)->get();
        return view('umkms.editImage', [
            'active' => 'dash_umkms',
            'umkm' => $umkm,
            'images' => $images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $umkm = Umkm::where('id', $request->umkms_id)->first();
        $umkms_id = $request->umkms_id; 
        $umkms_slug = $umkm->slug;
        if ($request->images != null){
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
        return redirect('/admin/umkms/'.$umkms_slug.'/edit')->with('success', 'Images has been add!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UmkmImage  $umkmImage
     * @return \Illuminate\Http\Response
     */
    public function show(UmkmImage $umkmImage)
    {
        // dd('show');
        $umkm = Umkm::where('id', $umkmImage->umkms_id)->first();
        $images = UmkmImage::where('umkms_id', $umkmImage->umkms_id)->get();
        return view('umkms.delImage', [
            'active' => 'dash_umkms',
            'umkm' => $umkm,
            'images' => $images
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UmkmImage  $umkmImage
     * @return \Illuminate\Http\Response
     */
    public function edit(UmkmImage $umkmImage)
    {
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UmkmImage  $umkmImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UmkmImage $umkmImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UmkmImage  $umkmImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(UmkmImage $umkmImage)
    {
        $umkm = Umkm::where('id', $umkmImage->umkms_id)->first();
        $umkms_slug = $umkm->slug;
        if($umkmImage->image){
            Storage::delete($umkmImage->image);
        }
        UmkmImage::destroy($umkmImage->id);
        $umkmImages = UmkmImage::where('umkms_id', $umkmImage->umkms_id)->inRandomOrder()->first();
        if ($umkmImages != null){
            return redirect('/admin/umkmImages/'.$umkmImages->id)->with('danger', 'Images has been deleted!');
        }
        else {
            return redirect('/admin/umkms/'.$umkms_slug.'/edit')->with('danger', 'Images has been deleted!');
        }
    }
}
