<?php

namespace App\Http\Controllers;

use App\Mail\OrderPaid;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RecursiveRegexIterator;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function expressCheckout($orderId)
    {
        $checkoutData = $this->checkoutData($orderId);

        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($checkoutData);

        return redirect($response['paypal_link']);
    }

    public function expressCheckoutSuccess(Request $request, $orderId)
    {
        $token = $request->token;
        $payerID = $request->PayerID;
        $checkoutData = $this->checkoutData($orderId);
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            //perform transaction on paypal
            // Note that 'token', 'PayerID' are values returned by PayPal when it
            // redirects to success page after successful verification of user's PayPal info.
            $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerID);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
            if (in_array($status, ['Completed', 'Processed'])) {
                $order = Order::where('id', $orderId)->update(['is_paid' => 1]);

                //todo:send email to customer
                $order = Order::find($orderId);
                $order->is_paid = 0;
                $order->update();
                Mail::to($order->user->email)->send(new OrderPaid($order));

                return redirect('/')->with('success', 'Payment Successful');
            }
        }

        return redirect('/')->with('success', 'Payment Unsuccessful Something Went Wrong');

    }

    public function cancelPayment()
    {

    }

    public function checkoutData($orderId)
    {
        $cart = \Cart::session(auth()->id());
        $cartItems = array_map(function ($item) {
            return [
                'name' => $item['name'],
                'qty' => $item['quantity'],
                'price' => $item['price']
            ];
        }, $cart->getContent()->toArray());

        $checkoutData = [
            'items' => $cartItems,
            'return_url' => route('paypal.success', $orderId),
            'cancel_url' => route('paypal.cancelPayment'),
            'invoice_id' => uniqid(),
            'invoice_description' => 'Order Description',
            'total' => $cart->getTotal()
        ];

        return $checkoutData;
    }
}
