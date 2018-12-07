@extends('layout.layout')

@section('main')

	<section class="content">
		<div class="container">
			<div class="row">
	            <div class="breadcrumbs col-md-12"> 
	                <a href="filmdangchieu.html">Phim</a> &gt; 
	              	<a href="filmdangchieu.html">Phim đang chiếu</a>  &gt;
	                <span class="bc-active">Bá Vương Biệt Cơ</span>
	            </div>
	        </div>
		</div>
		<div class="content-body">
			<div class=" banner-left">
				<a href=""><img src="img/123.jpg" alt=""></a>
			</div>
			<div class=" banner-right">
				<a href=""><img src="img/bn-right.jpg" alt=""></a>
			</div>
			<div class="detail-film">
				<div class="container">
					<div class="row">
						<div class="box-detail col-md-12">
							<?php
								foreach ($data as $key):
							?>
							<div class="row">
								<div class="img-detail col-md-3">
									<img src="{{asset('img/'.$key->image)}}" width="100%" height="400px" alt="{{$key->name}}">
								</div>
								<div class="info-detail col-md-9">
									<h2>{{$key->name}}</h2>
									<table class="table-detail">
			                            <tbody>
				                            <tr>
				                                <th>Thời lượng:</th>
				                                <td>{{$key->time}} phút</td>
				                            </tr>
				                            <tr>
				                                <th>Quốc gia: </th>
				                                <td>{{$key->country}}</td>
				                            </tr>
				                            <tr>
				                                <th>Ngày khởi chiếu:</th>
				                                <td>{{$key->date}}</td>
				                            </tr>
				                            <tr>
				                                <th>Thể loại:</th>
				                                <td>{{$key->category}}</td>
				                            </tr>
				                            <tr>
				                                <th>Đạo diễn:</th>
				                                <td>{{$key->directors}}</td>
				                            </tr>
				                            <tr>
				                                <th>Diễn viên:</th>
				                                <td>{{$key->actors}}</td>
				                            </tr>
				                            <tr>
			                                	<th>Nội dung:</th>
				                                <td>{{$key->content}}</td>
			                            	</tr>
			                        	</tbody>
		                        	</table>
								</div>
								<div>
									<h3 style="text-align: center;margin-top: 20px" class="col-md-12">Trailer</h3>
									<div class="col-md-12" style="margin-top: 40px">
										<center>
											<video src="{{asset('video/'.$key->trailer)}}" controls="controls" height="500px" width="80%"></video>	
										</center>
									</div>	
								</div>
								
							</div>
							<?php
								endforeach;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection