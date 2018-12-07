<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
    //
    public function getNews()
    {
    	return view('news.new');
    }
}
