<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class filmsController extends Controller
{
    //
    public function getFilms()
    {
    	$data = DB::table('films')->select('name','image','time','country','is_3d','date')->where('date','<',date('Y,m,d'))->orWhere('date','=',date('Y,m,d'))->get();
    	return view('film.filmdangchieu',['data'=>$data]);
    }
    public function getFilm()
    {
    	return view('film.filmInfor');
    }
    public function filmSapChieu()
    {
    	return view('film.filmsapchieu');
    }
}
