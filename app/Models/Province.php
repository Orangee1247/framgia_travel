<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
        'name',
        'description',
        'bg_url',
        'img_url',
    ];

    function plan_location()
    {
        return $this->hasMany(PlanLocation::class);
    }

    function service()
    {
        return $this->hasMany(Service::class);
    }

    function province_gallery()
    {
        return $this->hasMany(ProvinceGallery::class);
    }

    function requested_service()
    {
        return $this->hasMany(RequestedService::class);
    }
}
