<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function characteristic()
    {
        return $this->hasOne(Characteristic::class);
    }

    public function tags()
    {
        return$this->belongsToMany(Tag::class);
    }
}
