@extends('layout.layout')
@section('main')
	<section class="content">
		<div class="content-body">
			<div class=" banner-left">
				<a href=""><img src="img/123.jpg" alt=""></a>
			</div>
			<div class=" banner-right">
				<a href=""><img src="img/bn-right.jpg" alt=""></a>
			</div>		
			<div class="container">
				<div class="row">
					<div class="breadcrumbs col-md-12"> 
			            Trang chủ &gt; 
			            <span class="bc-active">Đăng nhập đăng ký</span>
			        </div>
				</div>
			</div>		
			<div class="account">
				<div class="container">
					<div class="row">
						<div class="login col-md-8">
							<div class="title-account">
								<ul>
									<li ><a href="thanhvien-login.html">Đăng nhập</a></li>
									<li class="active"><a href="thanhvien-register.html">Đăng ký</a></li>
								</ul>
							</div>
							<div class="form-account">
								<form  method="post" action="">
									<div class="main-form">
										<div class="signup-ctn">
											<div class="group-from">
												<label for="name">Họ tên<span class="red">*</span></label>
												<input value="" type="text" name="user_fullname" id="name">
											</div>
											<div class="group-from">
												<label for="username">Email<span class="red">*</span></label>
												<input value="" type="text" name="user_email" id="user_email">
											</div>
											<div class="group-from">
												<label for="user_password">Mật khẩu<span class="red">*</span></label>
												<input type="password" name="user_password" id="user_password">
											</div>
											<div class="group-from">
												<label for="repassword">Nhập lại mật khẩu<span class="red">*</span></label>
												<input type="password" name="user_confirm_password" id="user_confirm_password">
											</div>
											<div class="group-from">
												<label for="user_phone">Điện thoại<span class="red">*</span></label>
												<input value="" type="text" name="user_phone" id="user_phone">
											</div>
											<div class="group-from">
												<label for="address">Địa chỉ</label>
												<input value="" type="text" name="user_address" id="address">
											</div>
										</div>
										<div class="signup-ctn">
											<div class="group-from">
												<label for="user_city">Tỉnh/Thành Phố</label>
												<select name="user_city" id="user_city">
													<option value="Hà Nội">Hà Nội</option>
													<option value="Hải Phòng">Hải Phòng</option>
												</select>
											</div>
											<div class="group-from">
												<label for="user_district">Quận/Huyện</label>
												<input type="text" id="user_district">
											</div>
											<div class="group-from">
												<label>Ngày Sinh</label>
												<select class="birthday" name="b-date" id="b-date">
													<option value="0">Ngày</option>			
													<option value="1">1</option>			
													<option value="3">3</option>			
													<option value="4">4</option>
												</select>
												<select class="birthday name="b-month" id="b-month">
													<option value="0">Tháng</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
												</select>
												<select class="birthday name="b-year" id="b-year">
													<option value="0">Năm</option>
													<option value="1989">1989</option>
													<option value="1990">1990</option>
													<option value="1991">1991</option>
													<option value="1992">1992</option>
													<option value="1993">1993</option>
													<option value="1994">1994</option>
													<option value="1995">1995</option>
													<option value="1996">1996</option>
													<option value="1997">1997</option>
													<option value="1998">1998</option>
													<option value="1999">1999</option>
													<option value="2000">2000</option>
												</select>
											</div>
											<div class="group-from clear">
												<label for="user_gender">Giới tính</label>
												<select name="user_gender" id="user_gender">
													<option value="0">Nam</option>
													<option value="1">Nữ</option>
													<option value="2">Khác</option>
												</select>
											</div>
											<div class="group-from">
												<label for="identity">CMND hoặc Số hộ chiếu<span class="red">*</span></label>
												<input type="text" value="" name="user_identity" id="identity">	
											</div>		
										</div>
									</div>
									<div class="tab-bottom-ctn clear">
										<p>
											<input type="checkbox" id="dieu-khoan" name="">
											<label>Tôi cam kết tuân theo <a href="#">chính sách bảo mật</a> và <a href="">điều khoản sử dụng</a> của Betacineplex.</label>
										</p>
										<button style="cursor:pointer" type="submit" id="submitbtn">Đăng Ký</button>
									</div>
								</form>
								<a href="">Quên mật khẩu ?</a>
							</div>
						</div>
						<div class="hots-film col-md-4">
							<div class="hot-tilte">
								<h3>Phim đang hót</h3>
							</div>
							<div class="hot-film-ds">
								<div class="row">
									<div class="item col-md-6">
										<div class="img">
											<a href=""><img src="img/hot1.jpg" alt=""></a>
										</div>
										<div class="name">
											<a href="">Lăn Đến Bên Em</a>
										</div>
									</div>
									<div class="item col-md-6">
										<div class="img">
											<a href=""><img src="img/hot2.jpg" alt=""></a>
										</div>
										<div class="name">
											<a href="">2D Deadpool 2</a>
										</div>
									</div>
									<div class="item col-md-6">
										<div class="img">
											<a href=""><img src="img/hot1.jpg" alt=""></a>
										</div>
										<div class="name">
											<a href="">Lăn Đến Bên Em</a>
										</div>
									</div>
									<div class="item col-md-6">
										<div class="img">
											<a href=""><img src="img/hot2.jpg" alt=""></a>
										</div>
										<div class="name">
											<a href="">2D Deadpool 2</a>
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