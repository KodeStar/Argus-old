<?php

namespace App\Http\Controllers;

use App\Helpers\Contracts\CameraContract;

class CameraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function dashboard(CameraContract $camera)
    {
        $data['cameras'] = $camera->list();
        return view('home', $data);
    }

    //
}
