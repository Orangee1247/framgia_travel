<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGallery extends Model
{
    protected $table = 'user_gallerys';
    protected $fillable = [
        'user_id',
        'img_url',
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
