<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanCategory extends Model
{
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
