<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    use HasFactory;

    protected $timestamp = false;

    /**
     * @return mixed
     */
    public function machines()
    {
        return $this->hasMany(Machines::class);
    }
}
