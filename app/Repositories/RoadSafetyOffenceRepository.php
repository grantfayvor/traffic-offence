<?php

namespace App\Repositories;

use App\Models\RoadSafetyOffence;

class RoadSafetyOffenceRepository extends AbstractRepository {

    protected $model;

    public function __construct(RoadSafetyOffence $roadSafetyOffence) {
        $this->model = $roadSafetyOffence;
    }
}