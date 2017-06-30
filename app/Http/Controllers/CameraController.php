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
        parent::__construct();

    }

    public function dashboard(CameraContract $camera)
    {
        if(!$this->databaseReady()) return redirect('setup');
        
        $data['cameras'] = $camera->list();
        return view('home', $data);
    }

    public function setup()
    {
        $data = [];
        return view('setup', $data);
    }

    /**
     * Check if database is ready, if it isn't redirect user to setup page
     * @return [type] [description]
     */
    public function databaseReady()
    {
        $path = realpath(base_path().'/database/database.sqlite');

        if(filesize($path) > 0) {
            return true;
        }
        return false;
    

    }


    //
}
