<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calendarController extends Controller
{
    //
    public function getCalendar()
    {
    	return view('calendar.calendar');
    }
}
