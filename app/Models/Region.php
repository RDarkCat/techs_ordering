<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    public $timestamp = false;

    public function cities()
    {
        return $this->belongsToMany(city::class);
    }
}
