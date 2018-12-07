<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketPriceController extends Controller
{
    //
    public function getPrice()
    {
    	return view('price.ticketPrice');
    }
}
