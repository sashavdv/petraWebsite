<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie;
class PaymentController extends Controller
{


    public function preparePayment(request $request)
    {
        $sFirstName = $request->post('name-first');
        $sLastName = $request->post('name-last');
        $sEmail = $request->post('email');
        $oEvent = $request->post('event');

        $customer = $this->createMollieCustomer($sFirstName, $sLastName, $sEmail);

        $payment = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => '1.00', // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'customerId'    => $customer->id,
            'sequenceType' => 'first',
            'description'   => 'My Initial Payment',
            'redirectUrl'   => 'https://domain.com/return',
            'webhookUrl'   => route('webhooks.mollie'),
        ]);
        // Redirect the user to Mollie's payment screen.
        redirect($payment->getCheckoutUrl(), 303);
    }

    public function createMollieCustomer($sFirstName, $sLastName, $sEmail) {
        $sName = $sFirstName . " " . $sLastName;
        $customer = Mollie::api()->customers()->create([
            "name"  => $sName,
            "email" => $sEmail,
        ]);
        return $customer;
    }
    /**
     * After the customer has completed the transaction,
     * you can fetch, check and process the payment.
     * (See the webhook docs for more information.)
     */
    public function handle(Request $request) {
        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if($payment->isPaid()) {
            // do your thing...
        }
    }
}
