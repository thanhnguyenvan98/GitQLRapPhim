<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index.index');
});


Route::group(['prefix'=>'/films'],function(){
	Route::get('dangChieu','filmsController@getFilms')->name('dangChieu');
	Route::get('sapChieu','filmsController@getFilmSapChieu')->name('sapChieu');
	Route::get('infor/{id}','filmsController@getFilm')->name('inforFilm');
});

Route::group(['prefix'=>'/members'],function(){
	Route::get('login','membersController@login')->name('login');
	Route::get('create','membersController@create')->name('create');
});

Route::get('index','indexController@index')->name('index');

Route::get('news','newsController@getNews')->name('news');

Route::get('calendar','calendarController@getCalendar')->name('calendar');

Route::get('ticketPrice','ticketPriceController@getPrice')->name('ticketPrice');

Route::group(['prefix'=>'/pay'],function(){
	Route::get('selectChair','payController@selectChair')->name('selectChair');
	Route::get('method','payController@method')->name('method');
});




//ADMIN ROUTE



Route::group(['prefix'=>'/Admin'],function(){
	
	Route::get('index',function(){
		return view('adminIndex.index');
	});

	Route::group(['prefix'=>'/film'],function(){
		Route::get('filmList','adminFilmsController@getFilms')->name('listFilm');
		Route::get('filmInfor/{id}','adminFilmsController@getFilm');
		Route::get('filmEdit/{id}','adminFilmsController@getFormEdit')->name('filmEdit');
		Route::post('checkDataEdit/{id?}','adminFilmsController@checkDataEdit')->name('checkDataEdit');
		Route::get('sua','adminFilmsController@edit')->name('suaFilm');
		Route::get('filmCreate','adminFilmsController@getCreate')->name('getFilmCreate');
		Route::post('postFilmCreate','adminFilmsController@postCreate')->name('postFilmCreate');
		Route::get('filmDelete/{id}','adminFilmsController@delete')->name('deleteFilm');
	});
});
	


