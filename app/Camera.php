<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{


    public static function list()
    {
        $camera = (object)[ // placeholder
            (object)[
                'name' => 'Camera 1',
                'description' => 'Living room camers',
                'image' => 'img/camera1.png',
            ],
            (object)[
                'name' => 'Camera 2',
                'description' => 'Garden camers',
                'image' => 'img/camera2.jpg',
            ],
            (object)[
                'name' => 'Camera 3',
                'description' => 'Som other camera',
                'image' => 'img/camera3.jpg',
            ],
        ];
        return $camera;
    }

}
