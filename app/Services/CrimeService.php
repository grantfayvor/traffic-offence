<?php

namespace App\Services;

use App\Repositories\CrimeRepository;
use App\Repositories\VehicleOffenderRepository;

use Storage;

class CrimeService {

    private $repository;
    private $offenderRepo;

    public function __construct(CrimeRepository $repository, VehicleOffenderRepository $vehicleOffenderRepo) {
        $this->repository = $repository;
        $this->offenderRepo = $vehicleOffenderRepo;
    }

    public function getAll()
    {
        return $this->offenderRepo->findAll();
    }

    public function getById($id)
    {
        return $this->offenderRepo->findById($id);
    }

    public function create($request)
    {
        $vehicleModel = $request->vehicle_model;
        $vehicleMake = $request->vehicle_make;
        $vehicleInsurance = $request->vehicle_insurance;
        $ownerPhone = $request->owners_phone;
        $offenderPassport = $request->file('offenders_passport');
        $crimePicture = $request->file('crime_picture');
        $offenderPassportLocation = $vehicleMake .'_'. $vehicleModel .'_' . $vehicleInsurance . '_' . $ownerPhone . '_passport.jpg';
        $crimePictureLocation = $vehicleMake .'_'. $vehicleModel .'_' . $vehicleInsurance . '_' . $ownerPhone . '_crime_picture.jpg';
        Storage::disk('crimes')->putFileAs('/', $offenderPassport, $offenderPassportLocation);
        Storage::disk('crimes')->putFileAs('/', $crimePicture, $crimePictureLocation);
        $crime = [
            'offence_id' => $request->offence_id,
            'crime_picture' => $crimePictureLocation
        ];
        $crime = $this->repository->save($crime);
        $request->crime_id = $crime->id;
        $request->offenders_passport = $offenderPassportLocation;
        return $this->registerOffender($request);
        // return $crime;
    }

    public function registerOffender($request)
    {
        $data = [
            'ticket_number' => rand(1000000, 999999999999),
            'vehicle_owner' => $request->vehicle_owner,
            'vehicle_name' => $request->vehicle_name,
            'vehicle_make' => $request->vehicle_make,
            'vehicle_model' => $request->vehicle_model,
            'vehicle_type' => $request->vehicle_type,
            'vehicle_chasis' => $request->vehicle_chasis,
            'vehicle_insurance' => $request->vehicle_insurance,
            'vehicle_state_of_purchase' => $request->vehicle_state_of_purchase,
            'crime_id' => $request->crime_id,
            'crime_date' => $request->crime_date,
            'crime_place' => $request->crime_place,
            'crime_route' => $request->crime_route,
            'owners_phone' => $request->owners_phone,
            'owners_address' => $request->owners_address,
            'assaulted_official' => $request->assaulted_official,
            'offenders_passport' => $request->offenders_passport
        ];
        return $this->offenderRepo->save($data);
    }
}