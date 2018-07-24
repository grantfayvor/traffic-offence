<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleOffender extends Model
{
    protected $guarded = [];

    public function crime()
    {
        return $this->belongsTo(Crime::class);
    }
}
