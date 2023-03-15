<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    public function invoices()
    {
        $access_token = 'avdsfb';
        $page = '1';
        $limit = '10';
        $date_start = '2022-05-09 00:00:00';
        $date_end = '2022-05-09 23:59:59';
        $curl = curl_init();
        $invoice_id = ''; //[opcional] Al enviar éste campo los demás filtros son ignorados
        $branch_id = ''; //[opcional] Al enviar éste campo los demás filtros son ignorados

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/invoices/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'access_token' => $access_token,
                    'page' => $page,
                    'limit' => $limit,
                    'date_start' => $date_start,
                    'date_end' => $date_end,
                    'invoice_id' => $invoice_id,
                    'branch_id' => $branch_id
                ),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function store()
    {

        $access_token = 'x';
        $branch_id = '{{branch_id}}'; //lista de /v4/branches/
        $patient_id = '{{patient_id}}'; //lista de /v4/patients/
        $price_list_id = '{{price_list_id}}'; //lista de /v4/products/
        $classification_id = '1'; //lista de /v4/classifications/
        $referrer_id = '1'; //lista de /v4/referrers/
        $type_id = '1'; //1 = normal, 2 = ASAP, 3 = Emergencia
        $discount_amount = '';
        $product_id = '{{product_id}}'; //Lista de /v4/products/ - Arreglo con productos a facturar
        $products_quantity = '1';

        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/invoices/store/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'access_token' => $access_token,
                    'branch_id' => $branch_id,
                    'patient_id' => $patient_id,
                    'price_list_id' => $price_list_id,
                    'classification_id' => $classification_id,
                    'referrer_id' => $referrer_id,
                    'type_id' => $type_id,
                    'discount_amount' => $discount_amount,
                    'products[0][product_id]' => $product_id,
                    'products[0][quantity]' => $products_quantity
                ),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function remove()
    {
        $access_token = 'x';
        $invoice_id = '{{invoice_id}}';
        $product_id = '{{product_id}}';
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/invoices/remove/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'access_token' => $access_token,
                    'invoice_id' => $invoice_id,
                ),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
    public function cancel()
    {
        $access_token = 'x'; //token de /v4/sessions/
        $invoice_id = '{{invoice_id}}';
        $motive = '';
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/invoices/cancel/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('access_token' => $access_token, 'invoice_id' => $invoice_id, 'motive' => $motive),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function payment_save()
    {
        $access_token = 'x'; //token de /v4/sessions/
        $invoice_id = '';
        $payment_method_id = '1';
        $amount = '240';
        $date_posted = '2022-03-10';
        $branch_id = '16';
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/invoices/payment/save/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'access_token' => $access_token,
                    'invoice_id' => $invoice_id,
                    'payment_method_id' => $payment_method_id,
                    'amount' => $amount,
                    'date_posted' => $date_posted,
                    'branch_id' => $branch_id
                ),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

    }

    public function credit_notes()
    {

        $access_token = "x"; //token de /v4/sessions/
        $page = '1'; //número de página, valor predeterminado = 1
        $limit = '100'; //[opcional] Resultados por página, valor predeterminado = 10; valor máximo 100
        $date_start = '2022-05-09 00:00:00'; //YYY-MM-DD hh:mm:ss [0-23 horas]
        $date_end = '2022-05-09 23:59:59'; //YYYY-MM-DD hh:mm:ss [0-23 horas]
        $credit_note_id = ''; //[opcional] Al enviar éste campo los demás filtros son ignorados
        $branch_id = '';
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/credit_notes/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('access_token' => $access_token, 'page' => $page, 'limit' => $limit),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function branches()
    {

        $access_token = 'x'; //token de /v4/sessions/
        $page = '1'; //número de página, valor predeterminado = 1
        $limit = '10'; //[opcional] Resultados por página, valor predeterminado = 10; valor máximo 100
        $branch_id = '{{branch_id}}'; //[opcional] Al enviar éste campo los demás filtros son ignorados

        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/branches/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('access_token' => $access_token, 'page' => $page, 'limit' => $limit),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function referrers()
    {

        $access_token = 'x'; //token de /v4/sessions/
        $page = '1'; //número de página, valor predeterminado = 1
        $limit = '10'; //[opcional] Resultados por página, valor predeterminado = 10; valor máximo 100
        $referrer_id = ''; // [opcional] Al enviar éste campo los demás filtros son ignorados
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/referrers/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('access_token' => $access_token, 'page' => $page, 'limit' => $limit),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function classification()
    {

        $access_token = 'x'; //token de /v4/sessions/
        $page = '1'; //número de página, valor predeterminado = 1
        $limit = '10'; //[opcional] Resultados por página, valor predeterminado = 10; valor máximo 100
        $classification_id = ''; //[opcional] Al enviar éste campo los demás filtros son ignorados

        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/classification/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('access_token' => $access_token, 'page' => $page, 'limit' => $limit),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function price_lists()
    {

        $access_token = 'x'; //token de /v4/sessions/
        $page = '1'; //número de página, valor predeterminado = 1
        $limit = '3'; //[opcional] Resultados por página, valor predeterminado = 10; valor máximo 100
        $price_list_id = ''; //[opcional]

        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/price_lists/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('access_token' => $access_token, 'page' => $page, 'limit' => $limit),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function price_lists_save()
    {
        $access_token = 'x'; //token de /v4/sessions/
        $name = ''; //Nombre
        $code = ''; //Código único de cliente
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.salucloud.com/v4/price_lists/save/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('access_token' => $access_token, 'name' => $name, 'code' => $code),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function products_types()
    {
        $access_token = 'x'; //token de /v4/sessions/
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.salucloud.com/v4/products/types/',
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
        echo $response;
    }

    public function products_save(){

        $access_token='x';
        $code='';//oblgatorio]
        $name='';//[obligatorio]
        $type='';//[obligatorio]
        $product_id='';  //[product_id][obligatorio cuando es paquete] product_id
        $test_class_id='';//tests[test_class_id] [obligatorio cuando es tipo plantilla]
        $test_uom=''; //tests[uom] [obligatorio cuando es tipo plantilla]
        $tests_sample_id= ''; //tests[sample_id] [obligatorio cuando es tipo plantilla]
        $tests_order='';// tests[order] [obligatorio cuando es tipo plantilla]
        $test_class_id=''; //[obligatorio cuando es tipo plantilla]
        $sample_id=''; //[obligatorio cuando es tipo plantilla]
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.salucloud.com/v4/products/save/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('access_token' => $access_token,'code' => $code,'name' => $name,'type' => $type,
                              'products[product_id]' => $product_id,'tests[test_class_id]' => $test_class_id,'tests[uom]' => $test_uom,
                              'tests[sample_id]' => $tests_sample_id,'tests[order]' => $tests_order,'test_class_id' => $test_class_id,'sample_id' => $sample_id),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
    }
}