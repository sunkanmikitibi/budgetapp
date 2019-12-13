<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainSiteController extends Controller
{
    public function index(){
        return view('welcome1');
    }
}
