<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Do an</title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('/css/colorbox.css')}}">
	<link rel="stylesheet" href="{{url('/css/demoo.css')}}">
    <link rel="stylesheet" href="{{url('/css/settings.css')}}">
	<link rel="stylesheet" href="{{url('/css/responsive.css')}}">
	<link rel="stylesheet" title="style" href="{{url('/css/style.css')}}">
	<link rel="stylesheet" href="{{url('/css/animate.css')}}">
	<link rel="stylesheet" title="style" href="{{url('/css/huong-style.css')}}">
</head>
<body>
	@include('header')
<div class="rev-slider">
@yield('content')
</div>
@include('footer')

	<!-- include js files -->
<script src="{{url('/js/js1/jquery.js')}}"></script>
	<script src="{{url('/js/js1/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="{{url('/js/js1/jquery.bxslider.min.js')}}"></script>
	<script src="{{url('/js/js1/jquery.colorbox-min.js')}}"></script>
	<script src="{{url('/js/js1/Animo.js')}}"></script>
	<script src="{{url('/js/js1/dug.js')}}"></script>
	<script src="{{url('/js/js1/scripts.min.js')}}"></script>
	<script src="{{url('/js/js1/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{url('/js/js1/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{url('/js/js1/waypoints.min.js')}}"></script>
	<script src="{{url('/js/js1/wow.min.js')}}"></script>
	<!--customjs-->
	<script src="{{url('/js/js1/custom2.js')}}"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
