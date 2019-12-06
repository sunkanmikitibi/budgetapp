<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $fillable = [
        'firstname', 'surname', 'email', 'password',
    ];

    public function incomes()
    {
        return $this->hasMany('App\Income');
    }

}
