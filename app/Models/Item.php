<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $timestamp = false;


    public function characteristic()
    {
        return $this->hasOne(Characteristic::class);
    }
}
