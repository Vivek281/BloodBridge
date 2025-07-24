<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood_Requests extends Model
{
    protected $fillable = [
        'user_id',
        'blood_group',
        'units',
        'hospital_name',
        'urgency_level',
        'location',
    ];
}
