<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use App\Client;
use Session;
use App\IncomeCategory;

class IncomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::all();
        return view('income.index', compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $incomecats = IncomeCategory::all();
        $members = Client::all();
        return view('income.create', compact('incomecats', 'members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'amount'=>'required',
            'income_category'=>'required',
            'member_id'=>'required',
            'date'=>'date|required',
            'description'=>'sometimes',
        ]);

        $savings = new Income;
        $savings->title = $request->title;
        $savings->amount = $request->amount;
        $savings->income_category = $request->income_category;
        $savings->member_id = $request->member_id;
        $savings->date = $request->date;
        $savings->description = $request->description;

        $savings->save();
        $request->session()->flash('success', 'Savings Added Successfully');
        return redirect()->route('income.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
