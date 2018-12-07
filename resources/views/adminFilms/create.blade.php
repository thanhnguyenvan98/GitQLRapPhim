@extends('adminLayout.layout')
@section('main')

<div class="right_col" role="main">

    <div class="">
    	<div class="page-title">
        </div>
        <div class="title_left">
            <h3>Film Create </h3>
        </div>
        <div class="clearfix">
        	
        </div>
        <div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
              		<div class="x_title">
                		<ul class="nav navbar-right panel_toolbox">
                  			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  			</li>
                  			<li class="dropdown">
                    			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    			<ul class="dropdown-menu" role="menu">
                      				<li><a href="#">Settings 1</a>
                      				</li>
                      				<li><a href="#">Settings 2</a>
                      				</li>
                    			</ul>
                  			</li>
                  			<li><a class="close-link"><i class="fa fa-close"></i></a>
                  			</li>
                		</ul>
               		<div class="clearfix"></div>
              	</div>
              	<div class="x_content">
              		<div>
		        		<center>
		                	<?php
			                	if (session('thongBao')) {
			                		echo '<h3 style="text-align: center; color: red">Lỗi</h3>';
			                		$a = (array)session('thongBao');
			                		foreach ($a as $key => $value) {
			                			echo '<p style="color : red">'.$value.'</p>';
			                		}
			                	}
		                	?>
		                </center>
		        	</div>
					<br />
				    <form class="form-horizontal form-label-left" action="{{route('postFilmCreate')}}" method="POST" enctype="multipart/form-data">
				    	@csrf

				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required" style="color: red"> (*) </span></label>

				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<input type="text" id="name" name="name" class="form-control" placeholder="Tên film">
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Directors </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<input type="text" id="directors" name="directors" class="form-control" placeholder="Đạo diễn">
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Actors </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<input type="text" id="actors" name="actors" class="form-control" placeholder="Diễn viên">
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Production company<span class="required" style="color: red"> (*) </span> </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<input type="text" id="production_company" name="production_company" class="form-control" placeholder="Công ty sản xuất">
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Content
				        	</label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<textarea class="form-control" id="content" name="content" rows="4" placeholder="Nội dung" style="max-width:100% "></textarea>
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Date </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<input type="date" id="date" name="date" class="form-control">
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Time(m) </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<input type="number" id="time" name="time" class="form-control">
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Category </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<input type="text" id = "category" name="category" class="form-control">
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Country <span class="required" style="color: red"> (*) </span> </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<input type="text" id="country" name="country" class="form-control">
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="col-md-3 col-sm-3 col-xs-12 control-label">3D </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<div class="checkbox">
				            		<label>
				              		<input type="checkbox" id="is_3d" name="is_3d" value="1"> Film 3D
				            		</label>
				          		</div>
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="col-md-3 col-sm-3 col-xs-12 control-label">New </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<div class="checkbox">
				            		<label>
				              			<input type="checkbox" id="is_new" name="is_new" value="1"> New film
				            		</label>
				          		</div>
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="col-md-3 col-sm-3 col-xs-12 control-label">Status </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<div class="checkbox">
				            		<label>
				              			<input type="checkbox" id="status" name="status" value="1"> Show film
				            		</label>
				          		</div>
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Image <span class="required" style="color: red"> (*) </span> </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<input type="file" id="image" name="image" class="form-control" accept="image/png, image/jpeg" >
				        	</div>
				      	</div>
				      	<div class="form-group">
				        	<label class="control-label col-md-3 col-sm-3 col-xs-12">Trailer <span class="required" style="color: red"> (*) </span> </label>
				        	<div class="col-md-9 col-sm-9 col-xs-12">
				          		<input type="file" id="trailer" name="trailer" class="form-control" accept="video/mp4">
				        	</div>
				      	</div>
				      	<div class="ln_solid"></div>
				      	<div class="form-group">
					        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
					          	<button type="button" class="btn btn-primary" onclick="history.back()">Cancel</button>
					          	<button type="reset" class="btn btn-primary">Reset</button>
					          	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create</button>
					        </div>
				      	</div>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  	<div class="modal-dialog" role="document">
						    	<div class="modal-content">
						      		<div class="modal-header">
						        		<h5 class="modal-title" id="exampleModalLabel">Message</h5>
						        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          			<span aria-hidden="true">&times;</span>
						        		</button>
						      		</div>
						      		<div class="modal-body">
						        		Bạn có chắc chắn muốn thêm film không ?
						      		</div>
						      		<div class="modal-footer">
						        		<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
						        		<button type="submit" class="btn btn-primary">Create</button>
						      		</div>
						    	</div>
						  	</div>
						</div>
				    </form>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
@endsection
