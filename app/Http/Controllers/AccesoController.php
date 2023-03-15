<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Psr\Http\Message\RequestInterface;

class AccesoController extends Controller
{
  public function login(Request $request)
  {
    //$array= array('client_id' => '1', $client_secret => 'x', $username => 'admin', $password => 'xyzbdhjsmnamndbdb');

    $client_id = "11";
    $client_secret = "xxytttxyittxtxxxxxxxxkycxrkkkkkkkkkkkkkkky";
    $username = "admin";
    $password = "vsxhdsnsbsam";



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
      CURLOPT_POSTFIELDS => array('client_id' => $client_id, 'client_secret' => $client_secret, 'username' => $username, 'password' => $password),
    )
    );

    $response = curl_exec($curl);

    curl_close($curl);
    $data = json_decode($response);
    dd($data);
  }



  public function logout(Request $request)
  {

    $access_token = "x";



    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.salucloud.com/v4/logout/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('access_token' => $access_token,
      ),
    )
    );

    $response = curl_exec($curl);

    curl_close($curl);
    $data = json_decode($response);
    dd($data);
  }


  public function session_check(Request $request)
  {

    $access_token = "xxcvx";

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.salucloud.com/v4/session/check/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('access_token' => $access_token),
    )
    );

    $response = curl_exec($curl);

    curl_close($curl);
    $data = json_decode($response);
    dd($data);

  }
}