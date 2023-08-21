<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\UmkmImage;

class UmkmController extends Controller
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
        return view('umkm', [
            "title" => 'All Event ' . $title,
            "active" => 'all_event',
            "umkms" => Umkm::latest()->filter(request(['search_umkm']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Umkm $umkm)
    {
        // dd($post);
        return view('umkmMore', [
            "title"     => 'single umkm',
            "active"    => 'umkm',
            "umkm"      => $umkm,
            "images"    => UmkmImage::where('umkms_id', $umkm->id)->get(),
            "umkms"     => Umkm::latest()->where("id", "!=", $umkm->id)->take(3)->get()
        ]);
    }
}
