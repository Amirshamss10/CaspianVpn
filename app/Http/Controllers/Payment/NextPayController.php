<?php

namespace App\Http\Controllers\Payment;

use GuzzleHttp\Client;
use App\Models\payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class NextPayController extends Controller
{
    protected $api_key; 

    public function __construct() 
    {
        $this->api_key = env("API_KEY");
    }

    public function pay(int $amount, string $order_id) 
    {
        $callback_uri = url('verifyPay'); 

        $url = 'https://nextpay.org/nx/gateway/token'; 

        $client = new Client();

        $response = $client->request("post",$url, [
            "api_key" => $this->api_key, 
            "order_id" => $order_id, 
            "amount" => $amount,
            "callback_uri" => $callback_uri
        ]);

        $result = json_decode($response->getBody());            
        
        if($response->getStatusCode() == "-1") {

            payment::create([
                "trans_id" => $result->trans_id, 
                "amount" => $amount, 
                "order_id" => $order_id
            ]);
            return $result;
        }
        return $response->getStatusCode(); 
    } 
}
