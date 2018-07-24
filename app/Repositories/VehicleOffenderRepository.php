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

    public function search($text)
    {
        return $this->model->with('crime.road_safety_offence')->where('vehicle_owner', 'like', '%'.$text.'%')
            ->orWhere('vehicle_make', 'like', '%'.$text.'%')
            ->orWhere('vehicle_name', 'like', '%'.$text.'%')
            ->orWhere('vehicle_model', 'like', '%'.$text.'%')
            ->orWhere('vehicle_type', 'like', '%'.$text.'%')
            ->orWhere('vehicle_chasis', 'like', '%'.$text.'%')
            ->orWhere('vehicle_insurance', 'like', '%'.$text.'%')
            ->orWhere('crime_date', 'like', '%'.$text.'%')
            ->orWhere('crime_place', 'like', '%'.$text.'%')
            ->orWhere('crime_route', 'like', '%'.$text.'%')
            ->orWhere('owners_phone', 'like', '%'.$text.'%')
            ->orWhere('owners_address', 'like', '%'.$text.'%')
            ->orWhere('assaulted_official', 'like', '%'.$text.'%')
            ->get();
    }
}