<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CrimeService;

use Auth;

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

    public function search(Request $request)
    {
        $offences = $this->service->search($request->text);
        return view('view_offences', ['offences' => $offences, 'user' => Auth::user()]);
    }
}
