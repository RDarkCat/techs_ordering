<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'settlement_id',
        'name'
    ];

    public function characteristic()
    {
        return $this->hasOne(Characteristic::class);
    }

    public function tags()
    {
        return$this->belongsToMany(Tag::class);
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }
}
