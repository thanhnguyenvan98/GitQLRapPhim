@extends('layout.layout')

@section('main')

	<!-- /start content -->
	<section class="content">
		<div class="tab-header">
			<div class="container">
				<div class="row">
					<div class="tablist col-md-12 text-center">
						<ul>
							<li class="active"><a href="filmdangchieu.html">Phim đang chiếu</a></li>
							<li><a href="filmsapchieu.html">Phim sắp chiếu</a></li>
							<li><a href="">Suất chiếu đặc biệt</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
			<div class="film-content">
				<div class=" banner-left">
					<a href=""><img src="{{asset('img/123.jpg')}}" alt=""></a>
				</div>
				<div class=" banner-right">
					<a href=""><img src="{{asset('img/bn-right.jpg')}}" alt=""></a>
				</div>
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
									<a href=""><img src="{{asset('img/'.$item->image)}}" alt=""></a>
									<div class="button-film"  style="	margin-left: 6px;">
										<a href="calendar.html">Mua vé</a>
										<a href="details-film.html">Chi tiết</a>
									</div>
								</div>
								<div class="box-info">
									<div class="feature-film">
										<div class="row">
											<div class="name col-md-7">
												<p style="	margin-left: 10px; margin-top: 10px"><?php echo $item->name; 
													if($item->is_3d == 1)
														echo "<span>[3D]</span>";
													else
														echo "<span>[2D]</span>";
												?></p>
											</div>
											<div class="play col-md-5" >
												  <!-- Button to Open the Modal -->
												<button type="button"  data-toggle="modal" data-target="#myModal" style="background-color: white;color: red ; border-radius: 50% ; padding : 5px; width: 50px;height: 50px;margin-bottom: 10px;margin-top: 10px">
												    <i class="fas fa-play"></i>	
												</button>
											</div>
											<div class="time col-md-6">
												<i class="far fa-clock"  style="margin-left: 20px"></i><?php echo $item->time; ?>phut
											</div>
											<div class="nation col-md-6" style="margin-bottom: 20px">
												<i class="fas fa-globe"></i><?php echo $item->country ?>
											</div>	
										</div>
									</div>
								</div>
							</div>

							<!-- The Modal -->
							  <div class="modal fade" id="myModal">
							  	<div class="modal-dialog">
							  		<div class="modal-content">
							  			<!-- Modal Header -->
							  			<div class="modal-header">
							  				<h4 class="modal-title">Trailer</h4>
							  				<button type="button" class="close" data-dismiss="modal">&times;</button>
							  			</div>

							  			<!-- Modal body -->
							  			<center>
								  			<div class="modal-body">
								  				<h1><?php echo $item->name;?></h1>
								  				<iframe width="560" height="315" src="C:\xampp\htdocs\project\QLRapPhim\public\video\bavuong.mp4" frameborder="0" allowfullscreen></iframe>
								  			</div>
							  			</center>
							  		</div>
							  	</div>
							  </div>
							<!-- end the Modal-->


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
