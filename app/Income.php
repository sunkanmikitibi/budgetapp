<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function category()
    {
        return $this->belongsTo('App\IncomeCategory');
    }
}
