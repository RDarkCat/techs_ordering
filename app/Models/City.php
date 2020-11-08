<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $timestamp = false;

    public function regions()
    {
        return $this->belongsToMany(Region::class);
    }
}
