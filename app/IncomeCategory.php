<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeCategory extends Model
{
    public function incomes()
    {
        return $this->hasMany('App\Income');
    }
}
