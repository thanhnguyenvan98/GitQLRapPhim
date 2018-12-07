<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class filmsController extends Controller
{
    //
    public function getFilms()
    {
    	$data = DB::table('films')->select('name','image','time','country','is_3d','date','trailer','id_film')->where('date','<',date('Y,m,d'))->orWhere('date',date('Y,m,d'))->get();
    	return view('film.listFilm',['data'=>$data]);
    }
    public function getFilm($id)
    {
        $data = DB::table('films')->where('id_film' , $id)->get();
    	return view('film.filmInfor',['data'=>$data]);
    }
    public function getFilmSapChieu()
    {
        $data = DB::table('films')->select('name','image','time','country','is_3d','date','trailer','id_film')->where('date','>',date('Y,m,d'))->get();
    	return view('film.listFilm',['data'=>$data]);
    }
}
