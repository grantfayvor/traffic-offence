<?php

namespace App\Services;

use App\Repositories\RoadSafetyOffenceRepository;

class RoadSafetyService {

    private $repository;

    public function __construct(RoadSafetyOffenceRepository $repository) {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->findAll();
    }

    public function create($data = [])
    {
        return $this->repository->save($data);
    }
}