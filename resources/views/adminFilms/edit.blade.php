@extends('adminLayout.layout')
@section('main')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Film Edit</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  	<div class="x_title">
                    	<h2><?php echo $data[0]['name']; ?></h2>
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
						    <br />
						    <form class="form-horizontal form-label-left" action="{{asset('Admin/film/confirmEdit/' . $id)}}" method="POST" enctype="multipart/form-data">
						    	@csrf

						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required" style="color: red"> (*) </span></label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input type="text" id="name" name="name" class="form-control" placeholder="Tên film" <?php echo "value='".$data[0]['name']."'"; ?> >
						          <p style="color: red">
						          	<?php if (count($errors) != 0)
						          		if(isset($errors['name']))
						          			echo $errors['name'];
						          	?>
						          </p>
						        </div>
						      </div>
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Directors </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input type="text" id="directors" name="directors" class="form-control" placeholder="Đạo diễn" <?php echo "value='".$data[0]['directors']."'"; ?> >
						        </div>
						      </div>
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Actors </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input type="text" id="actors" name="actors" class="form-control" placeholder="Diễn viên" <?php echo "value='".$data[0]['actors']."'"; ?> >
						        </div>
						      </div>
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Production company<span class="required" style="color: red"> (*) </span> </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input type="text" id="production_company" name="production_company" class="form-control" placeholder="Công ty sản xuất" <?php echo "value='".$data[0]['production_company']."'"; ?> >
						          <p style="color: red">
						          	<?php if (count($errors) != 0)
						          		if(isset($errors['production_company']))
						          			echo $errors['production_company'];
						          	?>
						          </p>
						        </div>
						      </div>
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Content
						        </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <textarea class="form-control" id="content" name="content" rows="4" placeholder="Nội dung" style="max-width:100% "><?php echo $data[0]['content']; ?></textarea>
						        </div>
						      </div>
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input type="date" id="date" name="date" class="form-control" value="<?php echo $data[0]['date'] ?>">
						        </div>
						      </div>
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Time(m) </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input type="number" id="time" name="time" class="form-control" value="<?php echo $data[0]['time'] ?>">
						        </div>
						      </div>
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Category </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input type="text" id = "category" name="category" class="form-control" value="<?php echo $data[0]['category'] ?>">
						        </div>
						      </div>
						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Country <span class="required" style="color: red"> (*) </span> </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input type="text" id="country" name="country" class="form-control" value="<?php echo $data[0]['country'] ?>">
						          <p style="color: red">
						          	<?php if (count($errors) != 0)
						          		if(isset($errors['country']))
						          			echo $errors['country'];
						          	?>
						          </p>
						        </div>
						      </div>

						      <div class="form-group">
						        <label class="col-md-3 col-sm-3 col-xs-12 control-label">3D </label>

						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <div class="checkbox">
						            <label>
						              <input type="checkbox" id="is_3d" name="is_3d" value="1" <?php if($data[0]['is_3d'] == 1) echo "checked = 'checked'"; ?>> Film 3D
						            </label>
						          </div>
						        </div>
						      </div>


						      <div class="form-group">
						        <label class="col-md-3 col-sm-3 col-xs-12 control-label">New </label>

						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <div class="checkbox">
						            <label>
						              <input type="checkbox" id="is_new" name="is_new" value="1" <?php if($data[0]['is_new'] == 1) echo "checked = 'checked'"; ?>> New film
						            </label>
						          </div>
						        </div>
						      </div>

						      <div class="form-group">
						        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Status </label>

						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <div class="checkbox">
						            <label>
						              <input type="checkbox" id="status" name="status" value="1" <?php if($data[0]['status'] == 1) echo "checked = 'checked'"; ?>> Show film
						            </label>
						          </div>
						        </div>
						      </div>

						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image <span class="required" style="color: red"> (*) </span> </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input type="file" id="image" name="image" class="form-control" accept="image/png, image/jpeg" >
						          <p style="color: red">
						          	<?php if (count($errors) != 0)
						          		if(isset($errors['image']))
						          			echo $errors['image'];
						          	?>
						          </p>
						          <p><?php echo $data[0]['image'] ?></p>
						          <div id="demoImage">
						          	<img src="{{asset('img/'.$data[0]['image'])}}" width="500px" height="650px">
						          </div>
						        </div>
						      </div>

						      <div class="form-group">
						        <label class="control-label col-md-3 col-sm-3 col-xs-12">Trailer </label>
						        <div class="col-md-9 col-sm-9 col-xs-12">
						          <input type="file" id="trailer" name="trailer" class="form-control" accept="video/mp4">
						          <p><?php echo $data[0]['trailer'] ?></p>
						          <div>
						          	<video width="100%" controls>
									  <source src="{{asset('video/'. $data[0]['trailer'])}}" type="video/mp4">
									  Trình duyệt của bạn không hỗ trợ HTML5.
									</video>
						          </div>
						        </div>
						      </div>

						      <div class="ln_solid"></div>
						      <div class="form-group">
						        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
						          <button type="button" class="btn btn-primary" onclick="history.back()">Cancel</button>
						          <button type="reset" class="btn btn-primary">Reset</button>
						          <button type="submit" class="btn btn-success" name="submit" id="submit" >Submit</button>
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
