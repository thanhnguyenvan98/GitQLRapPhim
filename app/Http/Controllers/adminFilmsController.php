<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminFilmsController extends Controller
{
    //
    public function getFilms()
    {
    	$films = DB::table('films')->select('id_film','name','production_company','date','status')->get();
    	return view('adminFilms.index',['films'=>$films]);
    }

    public function getFilm($id)
    {
    	$film = DB::table('films')->where('id_film',$id)->get();

    	if (count($film) != 0) {
    		var_dump($film);

    		//return view('adminFilms.infor',['film'=>$film, 'id'=>$id]);
    	}
    	return view('errors.404');
    }

    public function getFormEdit($id)
    {
    	$errors = array();
    	$films = DB::table('films')->where('id_film',$id)->get();
    	$data = json_decode(json_encode($films),true);
    	if (count($data) != 0) {
    		return view('adminFilms.edit',['data'=>$data , 'id'=>$id , 'errors'=>$errors ]);
    	}
    	return view('errors.404');
    }
    public function confirmEdit(Request $rq ,$id)
    {
    	function utf8convert($str) {
	        if(!$str) return false;
	        $utf8 = array(

	            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
	            'd'=>'đ|Đ',
	            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
	            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
	            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
	            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
	            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
	        	);
			foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
			return $str;
		}
    	
    	function utf8tourl($text){
	        $text = strtolower(utf8convert($text));
	        $text = str_replace( "ß", "ss", $text);
	        $text = str_replace( "%", "", $text);
	        $text = preg_replace("/[^_a-zA-Z0-9 -] /", "",$text);
	        $text = str_replace(array('%20', ' '), '-', $text);
	        $text = str_replace("----","-",$text);
	        $text = str_replace("---","-",$text);
	        $text = str_replace("--","-",$text);
			return $text;
		}
    	
    	$errors = array();
    	$name = $rq->name;
		$slug = utf8convert($rq->name);
		$slug = utf8tourl($slug);
		$directors = $rq->directors;
		$actors = $rq->actors;
		$production_company = $rq->production_company;
		$content = $rq->content;
		$date = $rq->date;
		$time = $rq->time;
		$category = $rq->category;
		$country = $rq->country;
		$image = $rq->image;
		$trailer = $rq->trailer;

		if (isset($rq->is_3d)) {
			$is_3d = 1;
		}
		else $is_3d = 0;

		if (isset($rq->is_new)) {
			$is_new = 1;
		}
		else $is_new = 0;

		if (isset($rq->status)) {
			$status = 1;
		}
		else $status = 0;

		if ($rq->hasFile('image')) {
			$image->move('C:\xampp\htdocs\project\QLRapPhim\public\img',$image->getClientOriginalName()); 
		}

		if ($rq->hasFile('trailer')) {	
			$trailer->move('C:\xampp\htdocs\project\QLRapPhim\public\video',$trailer->getClientOriginalName());
   		}

    	if ($name == '') {
    		$errors['name'] = 'Name không được bỏ trống';
    	}
    	if($production_company == '') {
    		$errors['production_company'] = 'Production company không được bỏ trống';
    	}
    	if($country == '') {
    		$errors['country'] = 'Country không được bỏ trống';
    	}
    	if($image == '') {
    		$errors['image'] = 'Image không được bỏ trống';
    	}
    	if(count($errors) == 0)
    	{
    		return view('adminFilms.confirmEdit', ['id'=>$id ,'name'=>$name , 'slug'=>$slug , 'image'=>$image->getClientOriginalName() , 'trailer'=>$trailer->getClientOriginalName() , 'directors'=>$directors , 'actors'=>$actors , 'production_company'=>$production_company , 'country'=>$country , 'content'=>$content , 'date'=>$date , 'time'=>$time , 'category'=>$category
    			, 'is_3d'=>$is_3d , 'is_new'=>$is_new , 'status'=>$status]);
    	}
    	else
    	{
    		return view('adminFilms.edit',['data'=>['0'=>['name'=>$name , 'slug'=>$slug , 'image'=>$image , 'trailer'=>$trailer , 'directors'=>$directors , 'actors'=>$actors , 'production_company'=>$production_company , 'country'=>$country , 'content'=>$content  , 'date'=>$date , 'time'=>$time , 'category'=>$category
    			, 'is_3d'=>$is_3d , 'is_new'=>$is_new , 'status'=>$status]] , 'id'=>$id , 'errors'=>$errors]);
    	}
    }

}