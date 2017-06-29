<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Camera extends Model
{


    public static function list()
    {
        $cameras = [];
        $client = new Client(); //GuzzleHttp\Client
        $cameras = json_decode(file_get_contents('../resources/assets/camera.json'))->monitors;
        /*$response = $client->get(
            'http://192.168.0.20:8100/zm/api/monitors.json', 
                [
                    //'auth' =>  ['user', 'pass']
                ]
            );
        if($response->getStatusCode() === 200) {
            $body = $response->getBody();
            $cameras = json_decode($body);
            $cameras = $cameras->monitors;
            //var_dump($result->getBody());
        }*/
        return $cameras;
    }

}
