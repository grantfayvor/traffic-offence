<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    protected $guarded = [];

    public function road_safety_offence()
    {
        return $this->belongsTo(RoadSafetyOffence::class, 'offence_id');
    }
}
