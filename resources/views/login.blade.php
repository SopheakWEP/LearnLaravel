<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SFMS | Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{URL::asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{URL::asset('bower_components/Ionicons/css/ionicons.min.css')}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{URL::asset('css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="{{URL::asset('css/skins/_all-skins.min.css')}}">
  	<!-- Morris chart -->
  	<link rel="stylesheet" href="{{URL::asset('bower_components/morris.js/morris.css')}}">
  	<!-- jvectormap -->
  	<link rel="stylesheet" href="{{URL::asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
  	<!-- Date Picker -->
  	<link rel="stylesheet" href="{{URL::asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  	<!-- Daterange picker -->
  	<link rel="stylesheet" href="{{URL::asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  	<!-- bootstrap wysihtml5 - text editor -->
  	<link rel="stylesheet" href="{{URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  	<!-- custom style by developer -->
  	<link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body style="background-color: #dAC109;">
  	<br>
  	<br>
  	<br>
  	<br>
  	<br>
  	<br>
  	<br>
  	<br>
  	<br>
  	<div class="container" id="backLogin">
  		<div class="row">
  			<div class="col-lg-4 col-md-4"></div>
  			<div class="col-lg-4 col-md-4">
  				<div class="panel">
  					<div class="panel-body">
  						<h1 class="text-center">Login</h1>

  						<form action="/login">
  							<div class="form-group">
  								<label for="username">Username</label>
  								<input type="text" class="form-control" id="username" name="username">
  							</div>
  							<div class="form-group">
  								<label for="password">Password</label>
  								<input type="password" class="form-control" id="pass" name="password">
  							</div>
  							<button type="submit" class="btn btn-primary btn-block btn-flat" id="loginBtn" name="btnLogin">Login</button>
  						</form>
  					</div>
  				</div>
  			</div>
  			<div class="col-lg-4 col-md-4"></div>
  		</div>
  	</div>

  	<!-- jQuery 3 -->
  	<script src="{{URL::asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
  	<!-- jQuery UI 1.11.4 -->
  	<script src="{{URL::asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
  	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  	<script>
  		$.widget.bridge('uibutton', $.ui.button);
  	</script>
  	<!-- Bootstrap 3.3.7 -->
  	<script src="{{URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  	<!-- Morris.js charts -->
  	<script src="{{URL::asset('bower_components/raphael/raphael.min.js')}}"></script>
  	<script src="{{URL::asset('bower_components/morris.js/morris.min.js')}}"></script>
  	<!-- Sparkline -->
  	<script src="{{URL::asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  	<!-- jvectormap -->
  	<script src="{{URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
  	<script src="{{URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  	<!-- jQuery Knob Chart -->
  	<script src="{{URL::asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
  	<!-- daterangepicker -->
  	<script src="{{URL::asset('bower_components/moment/min/moment.min.js')}}"></script>
  	<script src="{{URL::asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  	<!-- datepicker -->
  	<script src="{{URL::asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  	<!-- Bootstrap WYSIHTML5 -->
  	<script src="{{URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  	<!-- Slimscroll -->
  	<script src="{{URL::asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  	<!-- FastClick -->
  	<script src="{{URL::asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
  	<!-- AdminLTE App -->
  	<script src="{{URL::asset('dist/js/adminlte.min.js')}}"></script>
  	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  	<script src="{{URL::asset('dist/js/pages/dashboard.js')}}"></script>
  	<!-- AdminLTE for demo purposes -->
  	<script src="{{URL::asset('dist/js/demo.js')}}"></script>
  	<script src="{{URL::asset('js/custom.js')}}"></script>
  </body>
  </html>
