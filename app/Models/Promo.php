<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'price_per_hour',
        'price_per_day',
        'description'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
