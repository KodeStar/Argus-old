<?php

namespace App\Http\Controllers;

use App\Camera;

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

    public function dashboard()
    {
        $data['cameras'] = Camera::list();
        return view('home', $data);
    }

    //
}
