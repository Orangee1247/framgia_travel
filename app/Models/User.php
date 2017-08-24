<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'date_of_birth',
        'gender',
        'phone',
        'address',
        'self_describe',
        'level',
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

    function comment()
    {
        return $this->hasMany(Comment::class);
    }

    function plan()
    {
        return $this->hasMany(Plan::class);
    }

    function user_gallery()
    {
        return $this->hasMany(UserGallery::class);
    }

    function follow()
    {
        return $this->hasMany(Follow::class);
    }

    function requested_service()
    {
        return $this->hasMany(RequestedService::class);
    }
}

