<!doctype html>
<html class="no-js" lang="">

<head>
	<?php $this->load->view('_partial/head.php'); ?>
</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


	<!-- Start Header Top Area -->
	<?php $this->load->view('_partial/header.php'); ?>
	<!-- End Header Top Area -->


	<!-- Mobile Menu start -->
	<!-- Mobile Menu end -->


	<!-- Main Menu area start-->
	<!-- Main Menu area End-->


	<!-- Data Content Start-->
	<?php echo $contents; ?>
	<!-- Data Content End-->

	<!-- Start JAVASCRIPT area-->
	<?php $this->load->view('_partial/javascript.php'); ?>
	<!-- End JAVASCRIPT area-->
</body>

</html>
