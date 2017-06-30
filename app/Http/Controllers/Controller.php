<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Artisan;

class Controller extends BaseController
{
    public function __construct()
    {
        // Check if database is empty, i.e. a new setup
    }

}
