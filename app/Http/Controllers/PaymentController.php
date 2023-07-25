<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Payment\NextPayController;

class PaymentController extends Controller
{
    public function add_order(Request $request)
    {
        $order = new NextPayController();

        $trans_id = $order->pay($request->amount, md5("AmirShams"));

        return redirect("https://nextpay.org/nx/gateway/payment/", $trans_id);
    }

    public function VerifyPayment(Request $request)
    {
        $api_key = env("API_KEY"); 

        $amount = payment::where("trans_id", $request->trans_id);

    }
}
