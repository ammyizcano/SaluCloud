<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalesController extends Controller
{
    public function identifications(Request $request)
    {
        $access_token = "x"; //

        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/locales/identifications/',
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

    public function phones_country_codes(Request $request)
    {
        $access_token = "x"; //
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.salucloud.com/v4/locales/phones/country_codes/',
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