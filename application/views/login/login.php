<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login Register | Notika - Notika Admin Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon
		============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<!-- Google Fonts
		============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/bootstrap.min.css">
	<!-- font awesome CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/font-awesome.min.css">
	<!-- owl.carousel CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/owl.carousel.css">
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/owl.theme.css">
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/owl.transitions.css">
	<!-- animate CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/animate.css">
	<!-- normalize CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/normalize.css">
	<!-- mCustomScrollbar CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/scrollbar/jquery.mCustomScrollbar.min.css">
	<!-- wave CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/wave/waves.min.css">
	<!-- Notika icon CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/notika-custom-icon.css">
	<!-- main CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/main.css">
	<!-- style CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/style.css">
	<!-- responsive CSS
		============================================ -->
	<link rel="stylesheet" href="<? base_url() ?>assets/template/css/responsive.css">
	<!-- modernizr JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<!-- Login Register area Start-->
	<div class="login-content">
		<!-- Login -->
		<div class="nk-block toggled" id="l-login">
			<h2 style="color:white">SISTEM INFORMASI INVENTORY</h2>
			<div class="logo-area">
				<a href="#"><img src="<? base_url() ?>assets/template/img/logo/logo.png" alt="" /></a>
			</div>
			<br>
			<div class="nk-form">
				<form method="POST" action="">
					<div class="input-group">
						<span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
						<div class="nk-int-st">
							<input type="text" name="username" class="form-control" placeholder="Username" required=""
								maxlength="50" oninvalid="this.setCustomValidity('Username Wajib Diisi')"
								oninput="setCustomValidity('')">
						</div>
					</div>
					<div class="input-group mg-t-15">
						<span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
						<div class="nk-int-st">
							<input type="password" name="password" class="form-control" placeholder="Password"
								required="" maxlength="60" oninvalid="this.setCustomValidity('Password Wajib Diisi')"
								oninput="setCustomValidity('')">
						</div>
					</div>
					<div style="margin-top:20">
						<button class="btn btn-success notika-btn-success waves-effect btn-lg btn-block">Login</button>
					</div>
			</div>
			</form>
		</div>
	</div>
	<!-- Login Register area End-->
	<!-- jquery
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/vendor/jquery-1.12.4.min.js"></script>
	<!-- bootstrap JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/bootstrap.min.js"></script>
	<!-- wow JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/wow.min.js"></script>
	<!-- price-slider JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/jquery-price-slider.js"></script>
	<!-- owl.carousel JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/owl.carousel.min.js"></script>
	<!-- scrollUp JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/jquery.scrollUp.min.js"></script>
	<!-- meanmenu JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/meanmenu/jquery.meanmenu.js"></script>
	<!-- counterup JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/counterup/jquery.counterup.min.js"></script>
	<script src="<? base_url() ?>assets/template/js/counterup/waypoints.min.js"></script>
	<script src="<? base_url() ?>assets/template/js/counterup/counterup-active.js"></script>
	<!-- mCustomScrollbar JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- sparkline JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/sparkline/jquery.sparkline.min.js"></script>
	<script src="<? base_url() ?>assets/template/js/sparkline/sparkline-active.js"></script>
	<!-- flot JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/flot/jquery.flot.js"></script>
	<script src="<? base_url() ?>assets/template/js/flot/jquery.flot.resize.js"></script>
	<script src="<? base_url() ?>assets/template/js/flot/flot-active.js"></script>
	<!-- knob JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/knob/jquery.knob.js"></script>
	<script src="<? base_url() ?>assets/template/js/knob/jquery.appear.js"></script>
	<script src="<? base_url() ?>assets/template/js/knob/knob-active.js"></script>
	<!--  Chat JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/chat/jquery.chat.js"></script>
	<!--  wave JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/wave/waves.min.js"></script>
	<script src="<? base_url() ?>assets/template/js/wave/wave-active.js"></script>
	<!-- icheck JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/icheck/icheck.min.js"></script>
	<script src="<? base_url() ?>assets/template/js/icheck/icheck-active.js"></script>
	<!--  todo JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/todo/jquery.todo.js"></script>
	<!-- Login JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/login/login-action.js"></script>
	<!-- plugins JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/plugins.js"></script>
	<!-- main JS
		============================================ -->
	<script src="<? base_url() ?>assets/template/js/main.js"></script>
</body>

</html>
