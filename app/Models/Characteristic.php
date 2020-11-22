<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    protected $timestamp = true;

    protected $primaryKey = 'item_id';

    protected $fillable = [
        'item_id',
        'description',
        'length',
        'height',
        'width',
        'mass',
        'power_watt',
        'horse_power',
        'lifting_capacity'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
