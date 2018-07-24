<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RoadSafetyService;
use App\Services\CrimeService;

use Auth;

class MainController extends Controller
{
    private $categoryService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoadSafetyService $roadSafetyService)
    {
        $roadSafetyOffences = $roadSafetyService->getAll();
        return view('index', ['crimes' => $roadSafetyOffences, 'json_crimes' => json_encode($roadSafetyOffences), 'user' => Auth::user()]);
    }

    public function offences()
    {
        return view('new_offences', ['user' => Auth::user()]);
    }

    public function view_offence(CrimeService $service)
    {
        $offences = $service->getAll();
        return view('view_offences', ['offences' => $offences, 'user' => Auth::user()]);
    }

    public function view_particular_offence($id, CrimeService $service)
    {
        $offence = $service->getById($id);
        return view('view_particular_offence', ['offence' => $offence, 'user' => Auth::user()]);
    }

    public function home()
    {
        return redirect()->to('/');
    }

    public function login()
    {
        return view('login');
    }

}
