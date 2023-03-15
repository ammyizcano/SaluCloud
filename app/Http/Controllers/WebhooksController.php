<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhooksController extends Controller
{
    public function branch_created (Request $request)
    {

        $event ='branch_updated';
        $branch_id ='{{branch_id}}';

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => '{{client_url}}',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('event' => $event,'branch_id' => $branch_id),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        
             


    }

    public function     branch_updated (Request $request)
    {

       
        
        $event ='branch_updated';
        $branch_id ='{{branch_id}}';  
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => '{{client_url}}',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('event' => $event,'branch_id' => $branch_id),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        




    }

     
    public function patient_created  (Request $request)
    {

        $event ='patient_created';
        $patient_id ='{{patient_id}}';  

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => '{{client_url}}',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('event' => $event,'patient_id' => $patient_id),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        



    }


    public function patient_updated  (Request $request)
    {
        
            
        $event ='patient_updated';
        $patient_id ='{{patient_id}}';
        

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => '{{client_url}}',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('event' => $event,'patient_id' => $patient_id),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        


    }




    public function price_list_created  (Request $request)
    {

       $event= 'price_list_created';
       $price_list_id= '{{price_list_id}}';

       

       $curl = curl_init();
       
       curl_setopt_array($curl, array(
         CURLOPT_URL => '{{client_url}}',
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'POST',
         CURLOPT_POSTFIELDS => array('event' => $event,'price_list_id' =>$price_list_id),
       ));
       
       $response = curl_exec($curl);
       
       curl_close($curl);
       echo $response;
       
        

    }
     
    public function  price_list_updated (Request $request)
    {

        $event= 'price_list_update';
       $price_list_id= '{{price_list_id}}';

            

       
      $curl = curl_init();
       
       curl_setopt_array($curl, array(
         CURLOPT_URL => '{{client_url}}',
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'POST',
         CURLOPT_POSTFIELDS => array('event' => $event,'price_list_id' => $price_list_id),
       ));
       
       $response = curl_exec($curl);
       
       curl_close($curl);
       echo $response;
       

    }


 

    public function  price_updated (Request $request)
    {

       $event='price_updated'; 
       $price_list_id='{{price_list_id}}';
       $product_id='{{product_id}}';


        $curl = curl_init();
       
       curl_setopt_array($curl, array(
         CURLOPT_URL => '{{client_url}}',
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'POST',
         CURLOPT_POSTFIELDS => array('event' => $event,'price_list_id' => $price_list_id,'product_id' => $product_id),
       ));
       
       $response = curl_exec($curl);
       
       curl_close($curl);
       echo $response;
       
        

    }
     
    public function product_created (Request $request)
    {

        $event='product_created';          
        $product_id='{{product_id}}';
        

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => '{{client_url}}',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('event' => $event,'product_id' => $product_id),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        

    }


    public function  product_updated (Request $request)
    {

        $event='product_updated';          
        $product_id='{{product_id}}';


         $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => '{{client_url}}',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('event' => $event,'product_id' => $product_id),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        


    }
   
      public function product_code_updated (Request $request)
    {

        $event='product_code_updated';           
        $product_id='{{product_id}}';
        
        
         $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => '{{client_url}}',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('event' => $event,'product_id' => $product_id),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        
       


    }
  

    public function invoice_created (Request $request)
    {

      $event='invoice_created';    
      $invoice_id='{{invoice_id}}';

      $curl = curl_init();
      
      curl_setopt_array($curl, array(
        CURLOPT_URL => '{{client_url}}',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('event' => $event,'invoice_id' => $invoice_id),
      ));
      
      $response = curl_exec($curl);
      
      curl_close($curl);
      echo $response;
      
      


    }

}