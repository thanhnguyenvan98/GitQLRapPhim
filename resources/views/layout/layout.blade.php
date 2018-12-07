<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>	
	<script src="{{asset('js/bootstrap.min.js')}}"></script>	
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>	
	<link rel="stylesheet" href="{{asset('css/style.css')}}">	
</head>
<body>
	<!-- /start header -->
	<header id="header" class="header">
		<div class="top-hedear">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-right">
						<ul>
							<li class="contact"><a href="">Liên hệ</a></li>
							<li class="contact"><a href="">Thẻ quà tặng</a></li>
							<li class="login"><a href="{{route('login')}}"> <i class="fas fa-user"></i> Đăng nhập</a></li>
							<li class="registere"><a href="{{route('create')}}">Đăng ký</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="logo-menu">
			<div class="container">
				<div class="row">
					<div class="logo col-md-2">
						<a href="{{route('index')}}"><img src="{{asset('img/LOGO_BETA.png')}}" alt=""></a>
					</div>
					<div class="menu col-md-7">
						<ul>
							<li><a href="{{route('index')}}">giới thiệu</a></li>
							<li><a href="{{route('calendar')}}">lịch chiếu</a></li>
							<li><a href="{{route('dangChieu')}}">phim</a>
								<ul class="dropdow-menu">
									<li><a href="{{route('dangChieu')}}">Phim đang chiếu</a></li>
									<li><a href="{{route('sapChieu')}}">Phim hay sắp chiếu</a></li>
								</ul>
							</li>
							<li><a href="{{route('news')}}">Tin mới và ưu đãi</a></li>
							<li><a href="{{route('ticketPrice')}}">Giá vé</a></li>
							<li><a href="{{route('login')}}">Thành viên</a></li>
						</ul>
					</div>
					<div class="search col-md-3">
						<form method="POST" action="" accept-charset="UTF-8">
	                        <div class="input-group">
	                            <input type="text" placeholder="Search" class="form-control ui-autocomplete-input">
	                            <div class="input-group-btn">
	                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
	                            </div>
	                        </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /end header -->


	@yield('main')


	<!-- /start footer -->
	<footer class="footer">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="menu-footer col-md-12 text-center">
						<ul>
							<li><a href="">Chăm sóc khách hàng</a></li>
							<li><a href="">Thỏa thuận</a></li>
							<li><a href="">Tuyển dụng</a></li>
							<li><a href="">Quảng cáo</a></li>
							<li><a href="">Hướng dẫn</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="logo-footer col-md-2">
						<a href="{{route('index')}}"><img src="{{asset('img/LOGO_BETA.png')}}" alt=""></a>
					</div>
					<div class="follow col-md-8 text-right">
						<ul>
	                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
	                        <li><a href=""><i class="fab fa-youtube" ></i></a></li>
	                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
	                      </ul>
					</div>
					<p>COPYRIGHT © TRONG&THANHCINEMAVN.COM - ALL RIGHTS RESERVED.</p>
				</div>
			</div>
		</div> 
	</footer>
	<!-- /end footer -->
</body>
</html>