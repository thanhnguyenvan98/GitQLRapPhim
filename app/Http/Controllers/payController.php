<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payController extends Controller
{
    //
    public function selectChair()
    {
    	return view('pay.selectChair');
    }

    public function method()
    {
    	return view('pay.method');
    }
}
