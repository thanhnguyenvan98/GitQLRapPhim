@extends('layout.layout')
@section('main')
	<section class="content">
		<div class="chonghe">
			<div class="container">
				<div class="row">
					<div class="layout-ghe col-md-8">
						<div class="margin-bottom-35">
		                    <h3><a href="/home.htm">Trang chủ</a> &gt; Đặt vé &gt; <span class="color1"><a href="">Peter Pan: Truy Tìm Cuốn Sách Ma Thuật</a></span></h3>
		                </div>
		                <div class="payment-seat-row">
		                	<div id="payment-form">
		                        <div class="payment-page-title" style="height: 35px; line-height: 35px;">
		                            <img style="height: 100%; float: left;" src="img/pay.png">
		                            <div class="page-title" id="scroll-top">THÔNG TIN THANH TOÁN</div>
		                        </div>
		                        <div class="payment-user-info font-family-san font-lg" style="margin-top: 25px; width: 100%; margin-bottom: 0px;">
		                            <div class="row">
		                                <div class="col-md-4 user-info-item font-16">
		                                    <span class="bold user-info-item-label">Họ Tên: </span><br>
		                                    <span class="user-info-item-value">Vũ Trọng </span>
		                                </div>
		                                <div class="col-md-4 user-info-item font-16">
		                                    <span class="bold user-info-item-label">Số điện thoại: </span><br>
		                                    <span class="user-info-item-value"> </span>
		                                </div>
		                                <div class="col-md-4 user-info-item font-16">
		                                    <span class="bold user-info-item-label">Email: </span><br>
		                                    <span class="user-info-item-value">vutrong89qn@gmail.com </span>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="clearfix"></div>
		                        <br>
		                        <br>
		                        
		                        <div class="ticket-selected ticket-selected-quantity-detail" style="">
		                        	<div class="row">
		                        		<div class="col-md-5 item-seat-type">Ghế thường</div>
		                        		<div class="col-md-4 item-seat-money" data-seat-quantity="1" data-seat-price="55000 vnđ ">1 x 55.000</div>
		                        		<div class="col-md-3 item-seat-money">= 55.000 vnđ</div>
		                        	</div>
		                        	<div class="clearfix"></div>
		                        	<hr style="margin-top: 15px;">
		                        </div>

		                        <div class="ticket-selected">
		                            <div class="row">
		                                <div class="col-md-5 item-seat-type"></div>
		                                <div class="col-md-4 item-seat-money">Tổng tiền</div>
		                                <div class="col-md-3 item-seat-money item-seat-total-money total-money-name">55.000 vnđ</div>
		                            </div>
		                        </div>
                        		<div class="clearfix"></div>
                        		<br>
                        		<div class="payment-page-title" style="height: 35px; line-height: 35px;">
		                            <img style="height: 100%; float: left;" src="img/pay1.png">
		                            <div class="page-title">PHƯƠNG THỨC THANH TOÁN</div>
		                            <a class="pull-right" target="_blank" href="http://202.9.84.88/documents/payment/guideVN.jsp?logos=v,m,a,j,u,at">Hướng dẫn thanh toán</a>
		                        </div>
		                        <div class="tab-35">
		                            <div class="option-title">Chọn thẻ thanh toán</div>
		                            <div class="row">
		                            	<div class="col-md-6">
			                                <input type="radio" id="card1" name="radio-group-card" value="vietnam" checked="">
			                                <label for="card1">
			                                    <img style="width: 45px; float: left; margin-left: 5px; margin-right: 10px;" src="img/card-vn.png">
			                                    <span style="line-height: 35px;">Thẻ nội địa</span>
			                               	</label>
			                            </div>
			                            <div class="col-md-6">
			                                <input type="radio" id="card2" name="radio-group-card" value="global">
			                                <label for="card2">
			                                    <img style="width: 45px; float: left; margin-left: 5px; margin-right: 10px;" src="img/card-qt.png">
			                                    <span style="line-height: 35px;">Thẻ quốc tế</span>
			                                </label>
			                            </div>
		                            </div>
		                        </div>
                     		</div>
                		</div>
              		</div>
					
					
	                <div class="bg-white col-md-4">
	                    <div class="row">
	                        <div class="col-md-12">
	                            <div class="row">
	                            	<div class="pi-img-wrapper col-md-6">
		                                <img class="img-responsive" style="width: 100%" alt="" src="img/1122.jpg">
		                            </div>
		                            <div class="col-md-6">
			                            <h3 class="bold color1">Peter Pan: Truy Tìm Cuốn Sách Ma Thuật</h3>
			                            <h4>2D Lồng tiếng</h4>
			                        </div>
	                            </div>
	                        </div>
	                        
	                        <div class="col-md-12">
	                            <ul class="list-unstyled padding-left-30 padding-right-30 padding-top-10 padding-bottom-10 font-md font-family-san">
	                                <li class="padding-bottom-10 padding-top-10">
	                                    <div class="row">
	                                        <div class="col-md-5">
	                                            <i class="fa fa-tags"></i>&nbsp;Thể loại
	                                        </div>
	                                        <div class="cocol-md-6">
	                                            <span class="bold">Hoạt hình, Phiêu lưu</span>
	                                        </div>
	                                    </div>
	                                </li>
	                                <li class="padding-bottom-10 padding-top-10">
	                                    <div class="row">
	                                        <div class="col-md-5">
	                                            <i class="fa fa-clock"></i>&nbsp;Thời lượng
	                                        </div>
	                                        <div class="col-md-6">
	                                            <span class="bold">91 phút</span>
	                                        </div>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                        <div class="col-md-12">
	                            <hr class="border-dashed border-top-2">
	                            <ul class="list-unstyled padding-left-30 padding-right-30 padding-top-10 padding-bottom-10 font-md font-family-san">
	                                <li class="padding-bottom-10 padding-top-10">
	                                    <div class="row">
	                                        <div class="col-md-5">
	                                            <i class="fas fa-university"></i>&nbsp;Rạp chiếu
	                                        </div>
	                                        <div class="col-md-7">
	                                            <span class="bold">Beta Thái Nguyên</span>
	                                        </div>
	                                    </div>
	                                </li>
	                                <li class="padding-bottom-10 padding-top-10">
	                                    <div class="row">
	                                        <div class="col-md-5"><i class="fas fa-calendar-alt"></i>&nbsp;Ngày chiếu</div>
	                                        <div class="col-md-7"><span class="bold">30/06/2018</span></div>
	                                    </div>
	                                </li>
	                                <li class="padding-bottom-10 padding-top-10">
	                                    <div class="row">
	                                        <div class="col-md-5"><i class="fa fa-clock"></i>&nbsp;Giờ chiếu</div>
	                                        <div class="col-md-7"><span class="bold">13:30</span></div>
	                                    </div>
	                                </li>
	                                <li class="padding-bottom-10 padding-top-10">
	                                    <div class="row">
	                                        <div class="col-md-5"><i class="fa fa-desktop"></i>&nbsp;Phòng chiếu</div>
	                                        <div class="col-md-7"><span class="bold">P3</span></div>
	                                    </div>
	                                </li>
	                                <li class="padding-bottom-10 padding-top-10">
	                                    <div class="row">
	                                        <div class="col-md-5"><i class="fa fa-cubes"></i>&nbsp;Ghế ngồi</div>
	                                        <div class="col-md-7"><span class="seat-name-selected bold"></span></div>
	                                    </div>
	                                </li>
	                            </ul>
	                            <div class="text-center padding-bottom-30">
	                                <button type="button" class="btn btn-2 btn-mua-ve btn-thanh-toan" onclick="ContinueToPaymentInfo()" style="font-weight: normal;"><span><i class="fa fa-ticket mr3"></i></span>TIẾP TỤC</button>
	                                <button type="button" class="btn btn-2 btn-mua-ve btn-back" onclick="backButtonClick()" style="font-weight: normal;display:none;"><span><i class="fa fa-ticket mr3"></i></span>Quay lại</button>
	                                <button type="button" onclick="ContinuePayment()" class="btn btn-2 btn-mua-ve dieu-khoan-pop-up" style="font-weight: normal; display: none;"><span><i class="fa fa-ticket mr3"></i></span>TIẾP TỤC</button>
	                                <a href="#dieukhoan-pop-up" class="fancybox-fast-view dieu-khoan-pop-up-hidden" style="font-weight: normal;"><span><i class="fa fa-ticket mr3"></i></span></a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				</div>
			</div>
		</div>
	</section >
@endsection