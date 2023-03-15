<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function patients () {


        $access_token ="";
        $page ="1";
        $limit ="10";
        $patient_id ="";
        $search ="";
       
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/patients/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('acess_token'=> $access_token,'page'=> $page, 'limit'=> $limit,'patient_id'=> $patient_id,'search'=> $search,),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
    }

    public function patients_save () {


      $access_token ="";
      $page ="1";
      $limit ="10";
      $patient_id ="";
      $search ="";
     
      $curl = curl_init();
      
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.salucloud.com/v4/patients/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('acess_token'=> $access_token,'page'=> $page, 'limit'=> $limit,'patient_id'=> $patient_id,'search'=> $search,),
      ));
      
      $response = curl_exec($curl);
      
      curl_close($curl);
      echo $response;
  }
}
