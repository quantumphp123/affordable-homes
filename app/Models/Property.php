<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function images()
    {
        $this->hasMany(PropertyImage::class);
    }

    public function maps()
    {
        $this->hasMany(PropertyMap::class);
    }
}