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

    public function images(){
        return $this->hasMany(UmkmImage::class, 'umkms_id', 'id');
    }
}
