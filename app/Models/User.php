<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function items()
    {
        return $this->belongsToMany(Item::class)->orderBy('name');
    }

    public function promos()
    {
        $user_id = $this->id;
        $promos = DB::table('item_user')
            ->join('promos', 'item_user.item_id', '=', 'promos.item_id')
            ->where('item_user.user_id', '=', $user_id)
            ->get();

        return $promos;
    }

    public function role()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }
    
    public function itemsLikes()
    {
        return$this->belongsToMany(Item::class, 'item_likes', 'user_id_from', 'item_id');
    }
}
