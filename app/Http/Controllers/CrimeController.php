<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CrimeService;

class CrimeController extends Controller
{
    private $service;

    public function __construct(CrimeService $service)
    {
        $this->service = $service;
    }

    public function create(Request $request)
    {
        $result = $this->service->create($request);
        return redirect()->to('/crime/' . $result->id);
    }

    public function getAll()
    {
        return $this->service->getAll();
    }
}
