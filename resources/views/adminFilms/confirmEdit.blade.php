@extends('adminLayout.layout')
@section('main')


@extends('adminLayout.layout')
@section('main')
		<div class="right_col" role="main">
          	<div class="">
            	<div class="page-title">
              		<div class="title_left">
                		<h3>Confirm Edit</h3>
                		<h4>Bạn có chắc chắn muốn thay đổi?</h4>
              		</div>
            	</div>
            
            	<div class="clearfix"></div>

            	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
	                <div class="x_title">
	                    <h2>Confirm Edit</h2>

	      
	                    <div class="clearfix"></div>
	                </div>
	              	<div class="x_content">
	                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
	                      <div class="profile_img">
	                        <div id="crop-avatar">
	                          <!-- Current avatar -->
	                          <img class="img-responsive avatar-view" src="{{asset('img/'.$image)}}" alt="Avatar" title="Change the avatar">
	                        </div>
	                      </div>
	                      <h3><?php echo $name; ?></h3>

	                      <ul class="list-unstyled user_data">
	                        <li><i class="fa fa-map-marker user-profile-icon"></i> Quốc gia :<?php echo $country; ?>
	                        </li>

	                        <li>
	                          <i class="fa fa-briefcase user-profile-icon"></i> Công ty sán xuất :<?php echo $production_company; ?>
	                        </li>


	                        <li>
	                           Đạo diễn :<?php echo $directors; ?>
	                        </li>

	                        <li>
	                        	Diễn viên :<?php echo $actors; ?>
	                        </li>

	                        <li>
	                        	Ngày chiếu :<?php echo $date; ?>
	                        </li>

	                        <li>
	                        	Thời lượng :<?php echo $time ?> phút
	                        </li>

	                        <li>
	                        	Loại film(3D/2D) :<?php if ($is_3d == 1) {
	                        		echo ' Film 3D';
	                        	}
	                        	else echo "Film 2D"; ?>
	                        </li>

	                        <li>
	                        	Mới :<?php if ($is_new == 1) {
	                        		echo ' Film mới';
	                        	}
	                        	else echo "Film cũ"; ?>
	                        </li>

	                        <li>
	                        	Đang chiếu :<?php if ($status == 1) {
	                        		echo ' Có';
	                        	}
	                        	else echo " Không"; ?>
	                        </li>
	                        
	                      </ul>
	                      <br />

	                    </div>
	                    <div class="col-md-9 col-sm-9 col-xs-12">
	                    	<div>
	                    		<video width="100%" controls>
								  <source src="{{asset('video/'.$trailer)}}" type="video/mp4">
								  Trình duyệt của bạn không hỗ trợ HTML5.
								</video>
	                    	</div>
	                      	<div class="" role="tabpanel" data-example-id="togglable-tabs">
		                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
		                          
		                        	<li role="presentation" class="active"><a href="#tab_content1" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Content</a>
		                          	</li>
		                          
		                        </ul>
		                        <div id="myTabContent" class="tab-content">
		                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="profile-tab">
		                            <p><?php echo $content; ?></p>
		                        </div>

		                        </div>
	                      	</div>
	                    </div>
	                </div>
	                <center>
	                	<button type="button" class="btn btn-primary" onclick="history.back()">Cancel</button>
	                	<a href="" class="btn btn-success"></i>Edit</a>
	                </center>
	            </div>
              </div>
            	</div>
          	</div>
        </div>
@endsection

@endsection