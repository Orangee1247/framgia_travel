<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'user_id',
        'service_id',
        'content',
        'rate_point',
        'updated_at',
        'created_at',
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function service()
    {
        return $this->belongsTo(Service::class);
    }
}
