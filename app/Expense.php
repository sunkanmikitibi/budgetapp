<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = "expenses";
    protected $fillable = [
        'title',
        'amount',
        'date',
        'expense_category',
        'member_id',
        'description'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function category()
    {
        return $this->belongsTo('App\ExpenseCategory');
    }
}
