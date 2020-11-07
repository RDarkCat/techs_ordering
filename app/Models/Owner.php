<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $timestamp = false;

    /**
     * @return mixed
     */
    public function machinery()
    {
        return $this->$this->hasMany(Machines::class);
    }
}