<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PlanLocation extends Model
{
    protected $table = 'plan_locations';
    protected $fillable = [
        'province_id',
        'plan_id',
    ];
}
