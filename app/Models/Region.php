<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'country_id'
    ];
    
    
    public function country($param) {
        return $this->hasOne(Country::class);
    }
}
