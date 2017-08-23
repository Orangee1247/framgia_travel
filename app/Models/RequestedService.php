<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestedService extends Model
{
    protected $table = 'requested_services';
    protected $fillable = [
        'user_id',
        'category_id',
        'province_id',
        'name',
        'description',
        'address',
        'opentime',
        'expected_price',
        'status',
    ];
}
