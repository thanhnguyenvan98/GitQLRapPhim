@extends('layout.layout')

@section('main')

	<!-- /start content -->
	<section class="content">
		<div class="tab-header">
			<div class="container">
				<div class="row">
					<div class="tablist col-md-12 text-center">
						<ul>
							<li><a href="{{route('dangChieu')}}">Phim đang chiếu</a></li>
							<li><a href="{{route('sapChieu')}}">Phim sắp chiếu</a></li>
							<li><a href="#">Suất chiếu đặc biệt</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
			<div class="film-content">
				<div class="tab-film">
					<div class="container">
						<div class="row">
				            <div class="breadcrumbs col-md-12"> 
				                <a href="{{asset('filmdangchieu.html')}}">Phim</a> &gt; 
				                <span class="bc-active">Phim đang chiếu</span>
				            </div>
				        </div>
						<div class="row">

							<?php
								$films = (array)$data;
								if(count($films)>0)
									foreach ($films as $film):
										foreach ($film as $item):
							?>

							<div class="item col-md-3">
								<div class="box-img">
									<a href=""><img src="{{asset('img/'.$item->image)}}" width=100%px height=350px alt=""></a>
									<div class="button-film"  style="	margin-left: 6px;">
										<a href="#">Mua vé</a>
										<a href="{{asset('films/infor/'.$item->id_film)}}">Chi tiết</a>
									</div>
								</div>
								<div class="box-info">
									<div class="feature-film">
										<div class="row">
											<div class="name col-md-7">
												<p style="	margin-left: 10px; margin-top: 10px"><?php echo $item->name."  "; 
													if($item->is_3d == 1)
														echo "<span>[3D]</span>";
													else
														echo "<span>[2D]</span>";
												?></p>
											</div>
											<div class="play col-md-5" >
												  <!-- Button to Open the Modal -->
												 <button type="button" class="btn btn-primary btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal{{$item->id_film}}" style="background-color: white;color: red ; border-radius: 50% ; padding : 5px; width: 50px;height: 50px;margin-bottom: 10px;margin-top: 10px"><i class="fas fa-play"></i></button>
											</div>
											<div class="time col-md-6">
												<i class="far fa-clock"  style="margin-left: 20px"></i><?php echo "  ".$item->time."  "; ?>phut
											</div>
											<div class="nation col-md-6" style="margin-bottom: 20px">
												<i class="fas fa-globe"></i><?php echo "  ".$item->country ?>
											</div>	
										</div>
									</div>
								</div>
							</div>

							<!-- The Modal -->
							<div class="modal fade" id="exampleModal{{$item->id_film}}" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                            <div class="modal-dialog" role="document">
	                              <div class="modal-content">
	                                <div class="modal-header">
	                                  <h5 class="modal-title" id="exampleModalLabel">Trailer</h5>
	                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                      <span aria-hidden="true">&times;</span>
	                                  </button>
	                                </div>
	                                <div class="modal-body">
	                                  	<video src="{{asset('video/'.$item->trailer)}}" controls="controls" width="100%">Trình duyệt bạn đang dùng không hỗ trợ tag video.</video>
	                                </div>
	                                <div class="modal-footer">
	                                  <button type="button" class="btn btn-xs" data-dismiss="modal"> Đóng </button>
	                                </div>
	                              </div>
	                            </div>
	                        </div>


							<?php
									endforeach;
								endforeach;
							?>
						</div>
						





					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /end content -->

@endsection
