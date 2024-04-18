<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;

    protected function getCreatedAtAttribute($value) {
        return date('d-M-Y', strtotime($value));
    }
}
