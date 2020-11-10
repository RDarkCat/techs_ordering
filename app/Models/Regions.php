<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;

    public $timestamp = false;

    public function cities()
    {
        return $this->belongsToMany(Cities::class);
    }
}
