
<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i>Đại học Bách Khoa Hà Nội</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0338 888 888</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if(Auth::check())
					<li><a href="#" data-toggle="modal" data-target="#info">{{Auth::user()->full_name}}</a></li>
					<li><a href="{{route('logout')}}">Đăng xuất</a></li>
           @else
           <li><a href="#"><i class="fa fa-user"> Tài khoản</i></a></li>
						<li><a href="#" data-toggle="modal" data-target="#dangnhap">Đăng nhập/Tạo tài khoản</a></li>
						@endif
					  
					</ul>
				</div>
{{-- modal info --}}
<div class="modal fade" id="info">
		<div class="modal-dialog modal-dialog-centered">
		  <div class="modal-content">
		  
			<!-- Modal Header -->
			<div class="modal-header">
			  <h4 class="modal-title">Thông tin tài khoản</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body">
		       <ul class="list-login">
					
			   </ul>
			</div>
			
			<!-- Modal footer -->
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>


      {{-- modal đăng nhập/tạo tài khoản --}}
	  <div class="modal fade" id="dangnhap">
		<div class="modal-dialog modal-dialog-centered">
		  <div class="modal-content">
		  
			<!-- Modal Header -->
			<div class="modal-header">
			  <h4 class="modal-title">Đăng nhập/Tạo tài khoản</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body">
		       <ul class="list-login">
                   <li class="list-login-item"><a href="#"data-toggle="modal" data-target="#dangnhap-form">Đăng nhập </a></li>
                   <li class="list-login-register"><a href="#" data-toggle="modal" data-target="#dangki-form">Tạo tài khoản</a></li>
                   <li class="list-login-facebook"><a href="#"><i class="fa fa-facebook-f"></i> Đăng nhập bằng Facebook</a></li>
			   <li class="list-login-google"><a href="{{route('login')}}"><i class="fa fa-google-plus"></i>Đăng nhập bằng google</a></li>
			   </ul>
			</div>
			
			<!-- Modal footer -->
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>

	  {{-------------- Form đăng nhập ----------------------}}
		   <div class="modal fade" id="dangnhap-form">
			<div class="modal-dialog modal-dialog-centered">
			  <div class="modal-content">
			  
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Đăng nhập</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<!-- Modal body -->
				<div class="modal-body">
				<form action="{{route('login')}}" method="POST">
						@csrf
						@if(Session::has('flag'))
				<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
						@endif
				<label for="">Email</label><br>
						<input type="email" name="email" placeholder="Nhập email"><br>
						<label for="">Mật khẩu</label><br>
						<input type="password" name="password" id="password"  placeholder="Mật khẩu"><br>
						<ul class="list-login">
							<br>
							<input type="submit" value="Đăng nhập" class="btn" id="btn-register">
								<li class="list-login-facebook"><a href="#"><i class="fa fa-facebook-f"></i> Đăng nhập bằng Facebook</a></li>
							<li class="list-login-google"><a href=""><i class="fa fa-google-plus"></i>Đăng nhập bằng google</a></li>
							</ul>
					</form>
				</div>
				
				<!-- Modal footer -->
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				
			  </div>
			</div>
			</div>
{{------------------------- Form đăng kí tài khoản ---------------------}}
	  <div class="modal fade" id="dangki-form">
			<div class="modal-dialog modal-dialog-centered">
			  <div class="modal-content">
			  
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Tạo tài khoản</h4>
					@if(count($errors)>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
						{{$err}} <br>
						@endforeach
					</div>
					@endif
					@if(Session::has('success'))
				<div class="alert alert-success">{{Session::get('success')}}</div>
				@endif
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<!-- Modal body -->
				<div class="modal-body">
				<form action="{{route('postRegister')}}" method="POST">
						@csrf
						<label for="">Họ tên</label><br>
						<input type="text" name="name" placeholder="Nhập họ tên" ><br>
						<label for="">SĐT</label><br>
						<input type="number" name="phone" id="phone" placeholder="Nhập số điện thoại"><br>
					  <label for="">Email</label><br>
						<input type="email" name="email" placeholder="Nhập email"><br>
						<label for="">Địa chỉ</label><br>
						<input type="text" name="address" placeholder="Nhập địa chỉ"><br>
						<label for="">Mật khẩu</label><br>
						<input type="password" name="password" placeholder="Nhập mật khẩu từ 6 kí tự"><br>
						
						<label for="">Nhập lại mật khẩu</label><br>
						<input type="password" name="re_password" placeholder="Nhập lại mật khẩu"><br>
						{{-- <label for="">Giới tính</label>
					  <input type="radio" name="gender" id="male">Nam
					  <input type="radio" name="gender" id="female">Nữ --}}
            <br>
					  <input type="submit" value="Tạo tài khoản" class="btn" id="btn-register">
					</form>
				</div>
				
				<!-- Modal footer -->
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				
			  </div>
			</div>
		  </div>

				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
				<a href="/home" id="logo"><img src="{{url('/image/asset/logo-cake.png')}}" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
					<form role="search" method="get" id="searchform" action="{{route('search')}}">
					        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trong @endif) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								@if(Session::has('cart'))
								@foreach($product_cart as $product)
								<div class="cart-item">
								<a href="{{route('xoagiohang',$product['item']['id'])}}" class="cart-item-delete"><i class="fa fa-times"></i></a>
									<div class="media">
										<a class="pull-left" href="#"><img src="{{url('/image/product/'.$product['item']['image'])}}" alt=""></a>
										<div class="media-body">
										<span class="cart-item-title">{{$product['item']['name']}}</span>
				
										<span class="cart-item-amount">{{$product['qty']}}*<span>@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}}
											 @else{{number_format($product['item']['promotion_price'])}} @endif</span></span>
										</div>
									</div>
								</div>
								@endforeach
								<div class="cart-caption">
								<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{Session('cart')->totalPrice}}đồng</span></div>
									<div class="clearfix"></div>
									
									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="/checkout" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						@endif <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="/home">Trang chủ</a></li>
						<li><a href="#">Sản phẩm</a>
							<ul class="sub-menu">
								@foreach($loai_sp as $loai)
							<li><a href="/type_product/{{$loai->id}}">{{$loai->name }}</a></li>
								@endforeach
							</ul>
						</li>
					<li><a href="/about">Giới thiệu</a></li>
						<li><a href="/contact">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div>