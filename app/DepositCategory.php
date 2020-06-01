<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositCategory extends Model
{
    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }
}
