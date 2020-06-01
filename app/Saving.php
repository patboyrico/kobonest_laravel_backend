<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function category()
    {
        return $this->belongsTo(SavingsCategory::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
