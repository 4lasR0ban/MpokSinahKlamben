<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Umkm extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
    protected $with = ['images'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search_post']) ? $filters['search_post'] : false) {
        //     $query->where('title', 'like', '%' . $filters['search_post'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search_post'] . '%');
        // }
        $query->when($filters['search_umkm'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        // $query->when($filters['category'] ?? false, function ($query, $category) {
        //     return $query->whereHas('category', function ($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });
        // $query->when($filters['author'] ?? false, function($query, $category){
        //     return $query->whereHas('category', function($query) use ($category){
        //         $query->where('slug', $category);
        //     });
        // });

        // $query->when($filters['author'] ?? false, function ($query, $author) {
        //     return $query->whereHas('author', function ($query) use ($author) {
        //         $query->where('username', $author);
        //     });
        // });
    }

    public function images(){
        return $this->hasMany(UmkmImage::class, 'umkms_id', 'id');
    }

    
}
