<!DOCTYPE Php>
<Php lang="zxx">
	
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Moviepoint - Online Movie,Vedio and TV Show Php Template </title>
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="assets/img/favcion.png" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/Php5shiv/3.7.3/Php5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Page loader -->
	    <!-- <div id="preloader"></div> -->
		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="header-area">
					<div class="logo">
						<a href="Index.Php" target="_blank"><img src="assets/img/logo.png" alt="logo" /></a>
					</div>
					<div class="header-right">
						<form action="#">
							<select>
								<option value="Movies">Movies</option>
								<option value="Movies">Movies</option>
								<option value="Movies">Movies</option>
							</select>
							<input type="text"/>
							<button><i class="icofont icofont-search"></i></button>
						</form>
						<ul>
							<li><a href="">Welcome Guest!</a></li>
							<?php
							if(isset($_SESSION['userid'])){
								$uid=$_SESSION['userid'];
						
							?>
							<li><a href="logout.Php">Logout</a></li>
<?php
							} else {

						
?>
							<li><a href="Sign Up Page.Php">Login</a></li>
							<?php
							}
							?>
						</ul>
					</div>
					<div class="menu-area">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="active" href="Index.Php"> Home </a></li>
                                <li><a href="Movies.Php"> Movies </a></li>
                                <li><a href="Blog.Php"> News </a></li>
                                <li><a href="Top Movies.Php"> Top Movies </a></li>
                                <li><a href="Celebrities.Php"> Contact Us </a></li>
								<li><a href="#"> Pages <i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="Blog Details.Php"> About Us </a></li>
										<li><a href="Movies Details.Php"> Movie Details </a></li>
									</ul>
								</li>
                                <li><a class="btn btn-danger btn-lg" href="Booking.Php"><i class="icofont icofont-ticket"></i> Tickets </a></li>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header>

		<!-- header section end --> 