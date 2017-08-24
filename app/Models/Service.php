<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'category_id',
        'province_id',
        'name',
        'description',
        'address',
        'opentime',
        'expected_price',
    ];

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function province()
    {
        return $this->belongsTo(Province::class);
    }

    function comment()
    {
        return $this->hasMany(Comment::class);
    }

    function plan_detail()
    {
        return $this->belongsTo(PlanDetail::class);
    }

    function service_gallery()
    {
        return $this->hasMany(ServiceGallery::class);
    }
}
