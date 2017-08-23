<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvinceGallery extends Model
{
    protected $table = 'province_gallery';
    protected $fillable = [
        'province_id',
        'img_url',
    ];

    function province()
    {
        return $this->belongsTo(Province::class);
    }
}
