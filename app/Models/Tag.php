<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'parent_id'];
    public $timestamps = false;

    public function items()
    {
        return$this->belongsToMany(Item::class);
    }
}
