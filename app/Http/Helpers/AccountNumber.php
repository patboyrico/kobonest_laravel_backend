<?php

namespace App\Http\Helpers;

use App\Wallet;


class AccountNumber {

    public static function createAcctNo()
    {
        $acct_no = 55 . rand(100000, 999999);
        $acct_numbers = Wallet::select('account_number')->get()->toArray();
        if(in_array($acct_no, $acct_numbers)){
            return self::createAcctNo();
        }
        return $acct_no;
    }

}
