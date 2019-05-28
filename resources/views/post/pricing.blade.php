@extends('main')
@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Prices</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Prices</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			<p>Neque porro quisquam est, qui dolom ipsum quia dolor sit amet. Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad mieniam, quis nostxerationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
			<div class="space25">&nbsp;</div>
			
			<!--price table-->
			<div class="col-sm-3">
			<div class="beta-pricing">
				<div class="pri-title"><h4>Standard</h4></div>
				<div class="clear"></div>
				<span class="pri-amo">
				<span class="price-currency">$</span>
					<span class="price-amount">5</span>
					<sup>99</sup>
					<sub>mountly</sub>
				</span>
				<div class="clear"></div>
				<span class="beta-price-list">5 Projects</span>
				<span class="beta-price-list">5 GB Storage</span>
				<span class="beta-price-list">Unlimited Users</span>
				<span class="beta-price-list">10 GB Bandwith</span>
				<span class="beta-price-list">Enhanced Security</span>
				<span class="beta-price-button"><a href="#" class="beta-btn beta-btn-2d">Sign up Now <i class="fa fa-chevron-right"></i></a></span>
			</div>
			</div>
			<!--price table-->
			<!--price table-->
			<div class="col-sm-3">
			<div class="beta-pricing">
				<div class="pri-title"><h4>Standard</h4></div>
				<div class="clear"></div>
				<span class="pri-amo">
				<span class="price-currency">$</span>
					<span class="price-amount">5</span>
					<sup>99</sup>
					<sub>mountly</sub>
				</span>
				<div class="clear"></div>
				<span class="beta-price-list">5 Projects</span>
				<span class="beta-price-list">5 GB Storage</span>
				<span class="beta-price-list">Unlimited Users</span>
				<span class="beta-price-list">10 GB Bandwith</span>
				<span class="beta-price-list">Enhanced Security</span>
				<span class="beta-price-button"><a href="#" class="beta-btn beta-btn-2d">Sign up Now <i class="fa fa-chevron-right"></i></a></span>
			</div>
			</div>
			<!--price table-->
			<!--price table-->
			<div class="col-sm-3">
			<div class="beta-pricing">
				<div class="pri-title"><h4>Standard</h4></div>
				<div class="clear"></div>
				<span class="pri-amo">
				<span class="price-currency">$</span>
					<span class="price-amount">5</span>
					<sup>99</sup>
					<sub>mountly</sub>
				</span>
				<div class="clear"></div>
				<span class="beta-price-list">5 Projects</span>
				<span class="beta-price-list">5 GB Storage</span>
				<span class="beta-price-list">Unlimited Users</span>
				<span class="beta-price-list">10 GB Bandwith</span>
				<span class="beta-price-list">Enhanced Security</span>
				<span class="beta-price-button"><a href="#" class="beta-btn beta-btn-2d">Sign up Now <i class="fa fa-chevron-right"></i></a></span>
			</div>
			</div>
			<!--price table-->
			<!--price table-->
			<div class="col-sm-3">
			<div class="beta-pricing">
				<div class="pri-title"><h4>Standard</h4></div>
				<div class="clear"></div>
				<span class="pri-amo">
				<span class="price-currency">$</span>
					<span class="price-amount">5</span>
					<sup>99</sup>
					<sub>mountly</sub>
				</span>
				<div class="clear"></div>
				<span class="beta-price-list">5 Projects</span>
				<span class="beta-price-list">5 GB Storage</span>
				<span class="beta-price-list">Unlimited Users</span>
				<span class="beta-price-list">10 GB Bandwith</span>
				<span class="beta-price-list">Enhanced Security</span>
				<span class="beta-price-button"><a href="#" class="beta-btn beta-btn-2d">Sign up Now <i class="fa fa-chevron-right"></i></a></span>
			</div>
			</div>
			<!--price table-->
			
			<div class="clear"></div>
			<div class="space20">&nbsp;</div>
			<p>Neque porro quisquam est, qui dolom ipsum quia dolor sit amet. Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad mieniam, quis nostxerationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
		</div> <!-- #content -->
	</div> <!-- .container -->
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