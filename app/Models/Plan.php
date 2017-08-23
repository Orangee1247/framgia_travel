<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'time',
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function plan_detail()
    {
        return $this->hasMany(PlanDetail::class);
    }

    function plan_location()
    {
        return $this->hasMany(PlanLocation::class);
    }
}
