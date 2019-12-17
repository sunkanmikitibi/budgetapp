<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $fillable = [
        'firstname', 'surname', 'email', 'address', 'mobile_number', 'password',
    ];

    public function incomes()
    {
        return $this->hasMany('App\Income');
    }

    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }

}
