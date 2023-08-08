<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class UmkmImage extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
    protected $with = ['umkm'];

    public function umkm(){
        return $this->belongsTo(Umkm::class);
    }
}
