@extends('layout.layout')
@section('main')
	<section class="content">
		<div class="tab-header">
			<div class="container">
				<div class="row">
					<ul class="timeday">
						<li class="day-1">
							<div class=" item-day time-cinema-5 active" >
								<div class="l-day">
									<span class="m">06</span>
									<span class="d">CN</span>
								</div>
								<span class="dt">14</span>
							</div>
						</li>
						<li class="day-1">
							<div data-t="1562018" class=" item-day time-cinema-5">
								<div class="l-day">
								<span class="m">06</span>
								<span class="d">T2</span>
							</div>
							<span class="dt">15</span></div>
						</li>
						<li class="day-1">
							<div data-t="1562018" class=" item-day time-cinema-5">
								<div class="l-day">
								<span class="m">06</span>
								<span class="d">T3</span>
							</div>
							<span class="dt">16</span></div>
						</li>
						<li class="day-1">
							<div data-t="1562018" class=" item-day time-cinema-5">
								<div class="l-day">
								<span class="m">06</span>
								<span class="d">T4</span>
							</div>
							<span class="dt">17</span></div>
						</li>
					</ul>
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
		</div>
		<div class="list-content">
			<div class="container">
				<div class="row">
					<div class="film-item col-md-4">
						<div class="item-img">
							<img src="img/gd.jpg" alt="">
						</div>
						<div class="play">
							<button data-toggle="modal" data-target="#myVideo">
							<i class="fa fa-play-circle"></i>
							</button>
							<div class="modal fade" id="myVideo" role="dialog">
							    <div class="modal-dialog modal-sm">
							      <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Gia Đình Siêu Nhân 2 (2D Phụ đề)</h4>
							          <div>
							          	<video src="https://www.youtube.com/watch?v=DFqjOM4egbo&feature=youtu.be"></video>
							          </div>
							        </div>
							      </div>
							    </div>
							  </div>
						</div>
					</div>
					<div class="film-info col-md-8">
						<div class="row">
							<div class="col-md-12">
								<h1 ><a href="details-film.html">Gia Đình Siêu Nhân 2 (2D Phụ đề)</a></h1>
							</div>
							<div class="col-md-12">
								<ul class="blog-info">
									<li><i class="fa fa-tags"></i>Hoạt hình</li>
									<li><i class="fa fa-clock"></i>132 phút</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								  <!-- Button to Open the Modal -->
								 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								    		15:45	
								 </button>
								<div class="font-smaller padding-top-5">
									136 ghế trống
								</div>
							</div>
							<div class="col-md-2">
								  <!-- Button to Open the Modal -->
								 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								    		15:45	
								 </button>
								<div class="font-smaller padding-top-5">
									136 ghế trống
								</div>
							</div>
							<div class="col-md-2">
								  <!-- Button to Open the Modal -->
								 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								    		15:45	
								 </button>
								<div class="font-smaller padding-top-5">
									136 ghế trống
								</div>
							</div>
							<div class="col-md-2">
								  <!-- Button to Open the Modal -->
								 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								    		15:45	
								 </button>
								<div class="font-smaller padding-top-5">
									136 ghế trống
								</div>
							</div>
							<div class="col-md-2">
								  <!-- Button to Open the Modal -->
								 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								    		15:45	
								 </button>
								<div class="font-smaller padding-top-5">
									136 ghế trống
								</div>
							</div>
							<div class="col-md-2">
								  <!-- Button to Open the Modal -->
								 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								    		15:45	
								 </button>
								<div class="font-smaller padding-top-5">
									136 ghế trống
								</div>
							</div>
							<div class="col-md-2">
								  <!-- Button to Open the Modal -->
								 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								    		15:45	
								 </button>
								<div class="font-smaller padding-top-5">
									136 ghế trống
								</div>
							</div>
							  <!-- The Modal -->
							  <div class="modal fade" id="myModal">
							  	<div class="modal-dialog">
							  		<div class="modal-content">

							  			<!-- Modal Header -->
							  			<div class="modal-header">
							  				<h4 class="modal-title">BẠN ĐANG ĐẶT VÉ XEM PHIM</h4>
							  				<button type="button" class="close" data-dismiss="modal">&times;</button>
							  			</div>

							  			<!-- Modal body -->
							  			<div class="modal-body">
							  				<h1>Gia Đình Siêu Nhân 2 (2D Phụ đề)</h1>
							  				<table class="table table-striped table-hover">
								                <thead>
								                    <tr>
								                        <th class="text-center" style="width: 26%;"><h4>Rạp chiếu</h4></th>
								                        <th class="text-center" style="width: 30%"><h4>Ngày chiếu</h4></th>
								                        <th class="text-center" style="width: 30%"><h4>Giờ chiếu</h4></th>
								                    </tr>
								                </thead>
								                <tbody>
								                    <tr>
								                        <td class="text-center font-lg bold"><h3 class="font-xs-small"><span id="rap"><span class="bold">Beta Mỹ Đình</span></span></h3></td>
								                        <td class="text-center font-lg bold"><h3 class="font-xs-small"><span id="ngaychieu"><span class="bold">30/06/2018</span></span></h3></td>
								                        <td class="text-center font-lg bold"><h3 class="font-xs-small"><span id="giochieu"><span class="bold">09:00</span></span></h3></td>
								                    </tr>
								                </tbody>
								            </table>
							  			</div>
							  			<!-- Modal footer -->
							  			<div class="modal-footer text-center">
							  				<a href="thanhvien-login.html"> ĐÔNG Ý</a>
							  			</div>
							  		</div>
							  	</div>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection