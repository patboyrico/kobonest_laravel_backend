<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
