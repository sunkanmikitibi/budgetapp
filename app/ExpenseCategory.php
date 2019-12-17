<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    protected $table = "expense_categories";
    protected $fillable = [
        'name'
    ];

    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }
}
