<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];

    function service()
    {
        return $this->hasMany(Service::class);
    }

    function requested_service()
    {
        return $this->hasMany(RequestedService::class);
    }
}
