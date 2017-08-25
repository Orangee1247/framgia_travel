<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'user_id',
        'service_id',
        'content',
        'title',
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

    public function getCreatedAtAttribute($attr) {
        return Carbon::parse($attr)->format('d/m/Y - h:ia'); //Change the format to whichever you desire
    }


}
