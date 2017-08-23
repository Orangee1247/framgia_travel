<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanLocation extends Model
{
    protected $table = 'plan_locations';
    protected $fillable = [
        'province_id',
        'plan_id',
    ];

    function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    function province()
    {
        return $this->belongsTo(Province::class);
    }
}
