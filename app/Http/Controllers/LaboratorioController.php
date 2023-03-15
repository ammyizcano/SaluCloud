<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    public function laboratory_orders (Request $request)
    {
      

        $acess_token="";
        $pagination_info="1";
        $page="1";
        $limit="100";
        $order_id="";
        $date_start="";
        $date_end="";
        $patient_id="";
        $branch_id="";
        $status_id="2";
        $results="1";



        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/orders/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $acess_token,'pagination_info' => $pagination_info,'page' => $page,'limit' => $limit,'order_id' => $order_id,'date_start' => $date_start,'date_end' => $date_end,'patient_id' => $patient_id,'branch_id' => $branch_id,'status_id' => $status_id,'results' => $results,),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        
    }

    public function laboratory_orders_status (Request $request)
    {

       $access_token="";
       $pagination_info ="1";
       $page="1";
       $limit ="100";
       $orden_id ="";
       $date_start ="";
       $date_end ="";
       $patient_id="";
       $branch_id ="";
       $status_id ="2";
       $rsults ="1";




        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/orders/status/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $acess_token,'pagination_info' => $pagination_info,'page' => $page,'limit' => $limit,'order_id' => $order_id,'date_start' => $date_start,'date_end' => $date_end,'patient_id' => $patient_id,'branch_id' => $branch_id,'status_id' => $status_id,'results' => $results,),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        
    }



    public function laboratory_orders_status_aggregated (Request $request)
    {
     


       $access_token="";
       $page="1";
       $limit ="10";
       $date_start ="";
       $date_end ="";
       $branch_id ="";
    


        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/orders/status/aggregated/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $acess_token,'page' => $page,'limit' => $limit,'date_start' => $date_start,'date_end' => $date_end,'branch_id' => $branch_id,),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        


    }



    public function laboratory_orders_sample_questionnaire (Request $request)
    {

        $access_token="";
        $pagination_info ="1";
        $page="1";
        $limit ="100";
        $orden_samples[] ="";
       
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/orders/sample/questionnaire/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $acess_token,'pagination_info' => $pagination_info,'limit' => $limit,'orden_samples[]' => $orden_samples, ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        

    }

    public function  laboratory_orders_results_pdf (Request $request)
    {

       
        $acess_token=""; 
        $order_id=""; 




        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/orders/results/pdf/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $access_token, 'order_id' => $order_id, ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        

    }

    

    public function laboratory_result_history (Request $request)
    {
           

        $acess_token=""; 
        $patient_id="";
        $test_id="27";




        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/result/history/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $access_token,'patient_id' => $patient_id,'test_id' => $test_id,),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        

    }




     
    public function laboratory_orders_sample (Request $request)
    {


        $acess_token=""; 
        $branch_id="278"; 
        $status_id="5"; 
        $order_sample_id ="";
        $comments="";
        $fields[91]= "answer";

       

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/orders/samples/confirm/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $access_token,'branch_id' => $branch_id,'status_id' => $status_id,'order_sample_id' => $order_sample_id,'comments' => $comments,'fields[91]' => $fields[91],),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        
        
    }
         


    public function laboratory_orders_sample_confirm (Request $request)
    {

        $acess_token=""; 
        $branch_id="278"; 
        $status_id="5"; 
        $order_sample_id ="4244325";
        $comments="comments";
        $fields[91][field_id]= "91";
        $fields[91][result]= "answer123 linked";
        $fields[91][order_section_id]= "7227124";
        


        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/orders/sample/confirm/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $access_token,'branch_id' => $branch_id,'status_id' => $status_id,'order_sample_id' => $order_sample_id,'comments' => $comments,),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        


    }



    public function laboratory_orders_samples_confirm (Request $request)
    {

       


        $acess_token=""; 
        $branch_id="278"; 
        $status_id="5"; 
        $order_sample_id ="4244325-2";
        $comments="comments";
        $fields[91][field_id]= "91";
        $fields[91][result]= "answer123 linked";
        $fields[91][order_section_id]= "7227124";
        


        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/orders/sample/confirm/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $access_token,'branch_id' => $branch_id,'status_id' => $status_id,'order_sample_id' => $order_sample_id,'comments' => $comments,),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        


    }



    /**Laboratorio Datos Maestros */

    public function laboratory_test_classes (Request $request)
    {


        $acess_token=""; 



        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/test_classes/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $access_token,),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        

    }


    public function laboratory_samples (Request $request)
    {

        $acess_token=""; 

        

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.salucloud.com/v4/laboratory/samples/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('access_token' => $access_token,),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        

}




}