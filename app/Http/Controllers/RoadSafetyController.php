<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RoadSafetyService;

class RoadSafetyController extends Controller
{
    private $service;

    public function __construct(RoadSafetyService $service)
    {
        $this->service = $service;
    }

    public function create(Request $request)
    {
        $this->service->create($request->all());
        return redirect()->to('/');
    }

    public function getAll()
    {
        return $this->service->getAll();
    }
}
