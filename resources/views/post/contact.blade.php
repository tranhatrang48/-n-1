@extends('main')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Contacts</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Contacts</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container beta-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.677531287168!2d105.84127411440699!3d21.005559593946998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76ccab6dd7%3A0x55e92a5b07a97d03!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1558881004966!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		{{-- <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.0141923553406!2d89.551518!3d22.801938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff8ef7ea2b7%3A0x1f1e9fc1cf4bd626!2sPranon+Pvt.+Limited!5e0!3m2!1sen!2s!4v1407828576904" ></iframe></div> --}}
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Contact Form</h2>
					<div class="space20">&nbsp;</div>
				<p>Hãy gửi nhừng phản hồi của bạn về sản phẩm của chúng tôi để cùng nhau khắc phục thiếu sót và tạo nên những mặt hàng tốt hơn nhé!</p>
					<div class="space20">&nbsp;</div>
				<form action="{{route('contact')}}" method="post" class="contact-form">	
						@csrf
						<div class="form-block">
							<input name="name" type="text" placeholder="Nhập họ tên">
						</div>
						<div class="form-block">
							<input name="email" type="email" placeholder="Nhập email">
						</div>
						<div class="form-block">
								<input name="password" type="password" placeholder="Nhập password">
							</div>
						<div class="form-block">
							<input name="product" type="text" placeholder="Sản phẩm">
						</div>
						<div class="form-block">
							<textarea name="message" placeholder="Đánh giá của bạn"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Send<i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Contact Information</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Address</h6>
					<p>
						Suite 127 / 267 – 277 Brussel St,<br>
						62 Croydon, NYC <br>
						Newyork
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Business Enquiries</h6>
					<p>
						Doloremque laudantium, totam rem aperiam, <br>
						inventore veritatio beatae. <br>
						<a href="mailto:biz@betadesign.com">biz@betadesign.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Employment</h6>
					<p>
						We’re always looking for talented persons to <br>
						join our team. <br>
						<a href="hr@betadesign.com">hr@betadesign.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
    </div> <!-- .container -->
<script src="{{url('/js/js1/beta.utils.js')}}"></script>
	<script type="text/javascript">
        $(function() {
            // this will get the full URL at the address bar
            var url = window.location.href;
    
            // passes on every "a" tag
            $(".main-menu a").each(function() {
                // checks if its the same on the address bar
                if (url == (this.href)) {
                    $(this).closest("li").addClass("active");
                    $(this).parents('li').addClass('parent-active');
                }
            });
        });   
    
    
    </script>
    <script>
         jQuery(document).ready(function($) {
                    'use strict';
                    
    // color box
    
    //color
          jQuery('#style-selector').animate({
          left: '-213px'
        });
    
        jQuery('#style-selector a.close').click(function(e){
          e.preventDefault();
          var div = jQuery('#style-selector');
          if (div.css('left') === '-213px') {
            jQuery('#style-selector').animate({
              left: '0'
            });
            jQuery(this).removeClass('icon-angle-left');
            jQuery(this).addClass('icon-angle-right');
          } else {
            jQuery('#style-selector').animate({
              left: '-213px'
            });
            jQuery(this).removeClass('icon-angle-right');
            jQuery(this).addClass('icon-angle-left');
          }
        });
                    });
        </script>

@endsection

	

