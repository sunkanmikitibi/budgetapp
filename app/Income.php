<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $table = "incomes";

    protected $fillable = [
        'title',
        'amount',
        'income_category',
        'member_id',
        'date',
        'description'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function category()
    {
        return $this->belongsTo('App\IncomeCategory');
    }
}
