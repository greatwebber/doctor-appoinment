<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Doctor Appointment Management System in PHP</title>

	    <!-- Custom styles for this page -->
	    <!-- <link href="vendor/bootstrap/bootstrap.min.css" rel="stylesheet"> -->

	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	    <link rel="stylesheet" type="text/css" href="vendor/parsley/parsley.css"/>

	    <link rel="stylesheet" type="text/css" href="vendor/datepicker/bootstrap-datepicker.css"/>

	    <!-- Custom styles for this page -->
    	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

		<!-- My Style 	-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<link rel="stylesheet" href="assets/css/style.css">

	    <style>
	    	.border-top { border-top: 1px solid #e5e5e5; }
			.border-bottom { border-bottom: 1px solid #e5e5e5; }

			.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
	    </style>
	</head>
	<body>
		<!-- <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
			<div class="col">
		    	<h5 class="my-0 mr-md-auto font-weight-normal">Webslesson</h5>
		    </div>
		    <?php
		    if(!isset($_SESSION['patient_id']))
		    {
		    ?>
		    <div class="col text-right"><a href="login.php">Login</a></div>
		   	<?php
		   	}
		   	?>
		    
	    </div>

	    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	      	<h1 class="display-4">Online Doctor Appointment Management System</h1>
	    </div>
	    <br />
	    <br />
	    <div class="container-fluid"> -->

		<div class="main-wrapper">

			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a class="navbar-brand" href="#"><?php echo $_SESSION['patient_name']; ?></a>
						<?php
								if(!isset($_SESSION['patient_id']))
								{
						?>
						<a href="#" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
						
						<?php
							}
							?>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="#" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="">
								<a href="index.php">Home <i class=""></i></a>
								
							</li>

							<?php
								if(($_SESSION['patient_id']))
								{
								?>
							<li class="">
								<a href="profile.php">Profile<i class=""></i></a>
								
							</li>


							<?php
							}
							?>

							

							<li class="">
								<a href="booking.php">Book Appointment <i class=""></i></a>
								
							</li>

							<?php
								if(($_SESSION['patient_id']))
								{
								?>
							<li class="">
								<a href="appointment.php">My Appointment<i class=""></i></a>
								
							</li>

							<li class="">
								<a href="logout.php">Logout<i class=""></i></a>
								
							</li>

							<?php
							}
							?>

							<?php
								if(!isset($_SESSION['patient_id']))
								{
								?>
							<li class="login-link">
								<a href="login.php">Login</a>
							</li>
							<?php
							}
							?>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +1 315 369 5943</p>
							</div>
						</li>
						<?php
								if(!isset($_SESSION['patient_id']))
								{
								?>
						<li class="nav-item">
							<a class="nav-link header-login" href="login.php">login / Signup </a>
						</li>
						<?php
							}
						?>
					</ul>
				</nav>
			</header>
