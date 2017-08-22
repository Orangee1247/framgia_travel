<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProvinceGallery extends Model
{
    protected $table = 'province_gallery';
    protected $fillable = [
        'province_id',
        'img_url',
    ];
}
