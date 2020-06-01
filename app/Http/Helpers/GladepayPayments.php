<?php

namespace App\Http\Helpers;

use GladePay\GladePay;

class GladepayPayments {


    public static function validateOTP($txnRef, $otp)
    {
        $gp = new GladePay("GP0000001", "123456789", "https://demo.api.gladepay.com/payment");
        $payment = $gp->validateOTP($txnRef, $otp);
        return $payment;
    }

    public static function makePayment($data)
    {
        $gp = new GladePay("GP0000001", "123456789", "https://demo.api.gladepay.com/payment");
        $json_request = json_decode($data, true);

        $payment = $gp->cardPayment($json_request['user'], $json_request['card'], $json_request['amount'], $json_request['country'], $json_request['currency']);
        return json_decode($payment);

    }

    public static function disburseFunds()
    {
        $gp = new GladePay("GP0000001", "123456789", "https://demo.api.gladepay.com/disburse");

        $json_initiate = '{
            "action":"transfer",
            "amount": "100",
            "bankcode":"058",
            "accountnumber":"0040000008",
            "sender_name": "John Doe",
            "narration": "Upkeep",
            "orderRef":"TX00001"
          }';

          $json_request = json_decode($json_initiate, true);


          $payment = $gp->moneyTransfer($json_request['amount'], $json_request['bankcode'] ,$json_request['accountnumber'], $json_request['sender_name'], $json_request['narration']);

    }

    public function getBankList()
    {
        $gp = new GladePay("GP0000001", "123456789", "https://demo.api.gladepay.com/resources");
        $banklist = json_decode($gp->getAccountPaymentSupportedBanks());
        return $banklist;
    }



}
