<!DOCTYPE html>
<head>
<title>Trang quản lý Admin Web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body >
<div class="log-w3">
<div  style="    background: #7c9e99;" class="w3layouts-main">
<style>
	html, body{
		background: #7c9e99;
		}
	</style>
	<h2>Đăng nhập</h2>
	<?php
	$message = Session::get('message');
	if($message){
		echo '<span class="text-alert">'.$message.'</span>';
		Session::put('message',null);
	}
	?>
		<form action="{{URL::to('/admin-dashboard')}}" method="post">
			{{ csrf_field() }}
			@foreach($errors->all() as $val)
			<ul>
				<li>{{$val}}</li>
			</ul>
			@endforeach
			<input type="text"  class="ggg" name="admin_email" placeholder="Điền email" >
			<input type="password" class="ggg" name="admin_password" placeholder="Điền password" >

		
				<div class="clearfix"></div>
				<input style="background:#233724a6" type="submit" value="Đăng nhập" name="login">

		
			<br/>
			@if($errors->has('g-recaptcha-response'))
			<span class="invalid-feedback" style="display:block">
				<strong>{{$errors->first('g-recaptcha-response')}}</strong>
			</span>
			@endif 
		</form>
	
		<!-- <a style="margin-left:62px" class="dk" href="{{url('/register-auth')}}">Đăng ký Auth</a> |
		<a class="dk" href="{{url('/login-auth')}}">Đăng nhập Auth</a>  -->
	
</div>
</div>
<style>
	a.dk{
	border: 1px solid #aea922;
    padding: 10px;
    margin: 0 13px;
    background: #1f1f1f96;
    border-radius: 18px;
	}
</style>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
