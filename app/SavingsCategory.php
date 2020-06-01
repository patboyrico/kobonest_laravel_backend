<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavingsCategory extends Model
{
    public function savings()
    {
        return $this->hasMany(Saving::class);
    }
}
