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
									<li class="active"><a href="thanhvien-login.html">Đăng nhập</a></li>
									<li><a href="thanhvien-register.html">Đăng ký</a></li>
								</ul>
							</div>
							<div class="form-account">
								<form method="post" action="">
									<div class="email">
										<label for="user_email">Email</label>
										<input name="user_email" type="text" id="user_email" placeholder="Username">
									</div>
									<div class="pass">
										<label for="user_password">Mật khẩu</label>
										<input name="user_password" type="password" value="" placeholder="password">
									</div>
									<div class="dn">
										<a href="chonghe.html">Đăng Nhập</a>
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