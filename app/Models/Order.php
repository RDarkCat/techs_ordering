<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'count',
        'delivery_address',
        'contact_phone',
        'user_id',
        'item_id',
        'comment'
    ];
}
