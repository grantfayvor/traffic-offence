<?php

namespace App\Repositories;

use App\Models\VehicleOffender;

class VehicleOffenderRepository extends AbstractRepository {

    protected $model;

    public function __construct(VehicleOffender $vehicleOffender) {
        $this->model = $vehicleOffender;
    }

    public function findAll()
    {
        return $this->model->with('crime.road_safety_offence')->orderBy('updated_at', 'desc')->get();
    }

    public function findById($id)
    {
        return $this->model->with('crime.road_safety_offence')->find($id);
    }
}