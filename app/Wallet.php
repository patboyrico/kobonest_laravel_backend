<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{

    protected $fillable = [
        'balance', 'savings_balance', 'deposit_balance', 'account_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getBalanceAttribute($value)
    {
        return $this->formatToCurrency($value);
    }

    public function getDepositBalanceAttribute($value)
    {
        return $this->formatToCurrency($value);
    }

    public function getSavingsBalanceAttribute($value)
    {
        return $this->formatToCurrency($value);
    }

    function formatToCurrency($value) {
        $formatted =  number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $value)), 2);
        return $value < 0 ? "({$formatted})" : "{$formatted}";
    }

}
