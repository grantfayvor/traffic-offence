<?php

namespace App\Repositories;

use App\Models\Crime;

class CrimeRepository extends AbstractRepository {

    protected $model;

    public function __construct(Crime $crime) {
        $this->model = $crime;
    }
}