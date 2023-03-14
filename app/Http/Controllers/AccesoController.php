<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Psr\Http\Message\RequestInterface;
class AccesoController extends Controller
{
    public function login(Request $request)
    {

        $client_id="1";
        $client_secret="x";
        $username="admin";
        $password="vsxhdsnsbsam";



        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/login/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array($client_id),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
       dd ($response);
    }


}