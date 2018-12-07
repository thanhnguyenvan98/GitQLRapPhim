<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class membersController extends Controller
{
    //
    public function login()
    {
    	return view('member.login');
    }
    public function create()
    {
    	return view('member.create');
    }
}
