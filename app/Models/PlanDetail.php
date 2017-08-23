<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanDetail extends Model
{
    protected $table = 'plan_details';
    protected $fillable = [
        'plan_id',
        'service_id',
        'title',
        'started_at',
        'end_at',
        'detail',
    ];

    function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    function service()
    {
        return $this->belongsTo(Service::class);
    }
}
