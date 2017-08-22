<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServiceGallery extends Model
{
    protected $table = 'service_gallerys';
    protected $fillable = [
        'service_id',
        'img_url',
    ];
}
