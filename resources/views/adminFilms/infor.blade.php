@extends('adminLayout.layout')
@section('main')
<?php
	foreach ($film as $key) :
?>
		<div class="right_col" role="main">
          	<div class="">
            	<div class="page-title">
              		<div class="title_left">
                		<h3><?php echo $key->name; ?></h3>
              		</div>
            	</div>
            
            	<div class="clearfix"></div>

            	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Film infor</h2>
                    
                    <div class="clearfix"></div>
                  </div>
	              <div class="x_content">
	                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
	                      <div class="profile_img">
	                        <div id="crop-avatar">
	                          <!-- Current avatar -->
	                          <img class="img-responsive avatar-view" src="{{asset('img/'.$key->image)}}" alt="Avatar" title="Change the avatar">
	                        </div>
	                      </div>
	                      <h3><?php echo $key->name; ?></h3>

	                      <ul class="list-unstyled user_data">
	                        <li><i class="fa fa-map-marker user-profile-icon"></i> Quốc gia :<?php echo $key->country; ?>
	                        </li>

	                        <li>
	                          <i class="fa fa-briefcase user-profile-icon"></i> Công ty sán xuất :<?php echo $key->production_company; ?>
	                        </li>


	                        <li>
	                           Đạo diễn :<?php echo $key->directors; ?>
	                        </li>

	                        <li>
	                        	Diễn viên :<?php echo $key->actors; ?>
	                        </li>

	                        <li>
	                        	Ngày chiếu :<?php echo $key->date; ?>
	                        </li>

	                        <li>
	                        	Thời lượng :<?php echo $key->time; ?> Phút
	                        </li>

	                        <li>
	                        	Loại film(3D/2D) :<?php if ($key->is_3d == 1) {
	                        		echo ' Film 3D';
	                        	}
	                        	else echo "Film 2D"; ?>
	                        </li>

	                        <li>
	                        	Mới :<?php if ($key->is_new == 1) {
	                        		echo ' Film mới';
	                        	}
	                        	else echo "Film cũ"; ?>
	                        </li>

	                        <li>
	                        	Đang chiếu :<?php if ($key->status == 1) {
	                        		echo ' Có';
	                        	}
	                        	else echo " Không"; ?>
	                        </li>
	                        
	                      </ul>

	                      <a href="{{asset('Admin').'/film/filmEdit/'.$id}}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Film</a>
	                      <br />

	                    </div>
	                    <div class="col-md-9 col-sm-9 col-xs-12">
	                    	<div>
	                    		<video width="100%" controls>
								  <source src="{{asset('video/'. $key->trailer)}}" type="video/mp4">
								  Trình duyệt của bạn không hỗ trợ HTML5.
								</video>
	                    	</div>
	                      	<div class="" role="tabpanel" data-example-id="togglable-tabs">
		                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
		                          
		                        	<li role="presentation" class="active"><a href="#tab_content1" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Content</a>
		                          	</li>

		                          	<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Revenue</a>
		                          	</li>
		                          
		                        </ul>
		                        <div id="myTabContent" class="tab-content">
		                          
		                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

		                            <!-- start user projects -->
		                            <table class="data table table-striped no-margin">
		                              <thead>
		                                <tr>
		                                  <th>#</th>
		                                  <th>Project Name</th>
		                                  <th>Client Company</th>
		                                  <th class="hidden-phone">Hours Spent</th>
		                                  <th>Contribution</th>
		                                </tr>
		                              </thead>
		                              <tbody>
		                                <tr>
		                                  <td>1</td>
		                                  <td>New Company Takeover Review</td>
		                                  <td>Deveint Inc</td>
		                                  <td class="hidden-phone">18</td>
		                                  <td class="vertical-align-mid">
		                                    <div class="progress">
		                                      <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
		                                    </div>
		                                  </td>
		                                </tr>
		                                <tr>
		                                  <td>2</td>
		                                  <td>New Partner Contracts Consultanci</td>
		                                  <td>Deveint Inc</td>
		                                  <td class="hidden-phone">13</td>
		                                  <td class="vertical-align-mid">
		                                    <div class="progress">
		                                      <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
		                                    </div>
		                                  </td>
		                                </tr>
		                                <tr>
		                                  <td>3</td>
		                                  <td>Partners and Inverstors report</td>
		                                  <td>Deveint Inc</td>
		                                  <td class="hidden-phone">30</td>
		                                  <td class="vertical-align-mid">
		                                    <div class="progress">
		                                      <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
		                                    </div>
		                                  </td>
		                                </tr>
		                                <tr>
		                                  <td>4</td>
		                                  <td>New Company Takeover Review</td>
		                                  <td>Deveint Inc</td>
		                                  <td class="hidden-phone">28</td>
		                                  <td class="vertical-align-mid">
		                                    <div class="progress">
		                                      <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
		                                    </div>
		                                  </td>
		                                </tr>
		                              </tbody>
		                            </table>
		                            <!-- end user projects -->

		                          </div>

		                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="profile-tab">
		                            <p><?php echo $key->content; ?></p>
		                          </div>

		                        </div>
	                      	</div>
	                    </div>
	                  </div>
	              </div>
              </div>
            	</div>
          	</div>
        </div>
<?php
	endforeach;
?>
@endsection