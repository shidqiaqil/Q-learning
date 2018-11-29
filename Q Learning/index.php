<!DOCTYPE html>
<html lang="en">
<head>
<title>Q-Learning</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/dropdown.css">
</head>
<style>
	.margin1{
		margin-left: 20px;
	}
	.font1{
		font-size: 18px;
		font-weight: 500;
	}
	.navbar-nav li.active{
		border-bottom: 5px solid #5BC0EB;
	}
	.navbar-collapse.collapse.show {
		max-height: 280px;
		overflow-y: auto;
	}
</style>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->


		<!-- Header Content -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7">
							<a href="#">
								<div style="margin: 20px 10px;" class="logo_text">Q-LEAR<span>NING</span></div>
							</a>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5">
							<ul class="nav justify-content-end">
								<li class="nav-item">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
								</li>
							</ul>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav">
									<li class="nav-item active margin1">
										<a class="nav-link dropbtn font1" style="color:#14bdee;" href="index.php">Beranda <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item dropdown margin1">
										<a class="nav-link dropbtn dropdown-toggle font1" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Materi
										</a>
										<ul class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
											<li class="dropdown-submenu">
												<a class="dropdown-item" tabindex="-1" href="#">Basic Query</a>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-item" style="padding:0%"><a href="pengenalan.php">Pengenalan</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="mater-query-dasar.php">Select</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="materi-operator.php">Operator</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="materi-fungsi.php">Fungsi</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="materi-kondisional.php">Kondisional</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="materi-orderby.php">Order By</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Intermediate Query</a>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-item" style="padding:0%"><a href="Pengenalan-intermediete.php">Pengenalan</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="materi-innerjoin.php">Inner Join</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="materi-naturaljoin.php">Natural Join</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="materi-crossjoin.php">Cross Join</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="nav-item dropdown margin1">
										<a class="nav-link dropbtn dropdown-toggle font1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Soal
										</a>
										<div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="soal-query-dasar.php">Basic Query</a>
											<a class="dropdown-item" href="soal-intermediate.php">Intermediate Query</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- <div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Q-LEAR<span>NING</span></div>
								</a>
							</div>
							<nav class="main_nav_container ml-auto navbar-fixed-top">
								<ul class="main_nav">
									<li><a href="index.html" style="color:#14bdee;">Beranda</a></li>
									<div class="dropdown">
									  <li>
											<a href="#" class="dropbtn ">Materi <i class="fa fa-caret-down"></i></a>
										</li>
									  <div class="dropdown-content">
									    <a href="pengenalan.html">Pengenalan</a>
									    <a href="mater-query-dasar.html">Query Dasar</a>
									    <a href="materi-intermediette-query.html">Intermediete Query</a>
									  </div>
									</div>
									<div class="dropdown">
										<li>
											<a href="#" class="dropbtn">Soal <i class="fa fa-caret-down"></i></a>
										</li>
										<div class="dropdown-content">
											<a href="soal-query-dasar.html">Query Dasar</a>
											<a href="soal-intermediette-query.html">Intermediette Query</a>
										</div>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>

		<nav class="menu_nav">

		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">

			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/blurred-background-close-up-coffee-cup-908284.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title"></div>
									<div class="home_slider_subtitle"></div>
									<div class="home_slider_form_container">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<!-- <div class="owl-item">
					<div class="home_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->

				<!-- Home Slider Item -->
				<!-- <div class="owl-item">
					<div class="home_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->

			</div>
		</div>

		<!-- Home Slider Nav -->


	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To Q-Learning</h2>
						<div class="section_subtitle"><p>Q-LEARNING adalah sebuah website yang berfokus pada pembelajaran basic query dan intermediette query</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">

				<!-- Features Item -->
				<div class="col-md-4">
						<div class="text-center trans_400">
			      	<img src="images/video-camera (1).png">
			      	<h4 class="font-weight-bold my-4">Materi</h4>
			      	<p class="grey-text mb-md-0 mb-5">Untuk memudahkan kamu untuk belajar, kami menyiapkan berbagai macam video yang dapat dengan mudah kamu mengerti
			      	</p>
						</div>
    		</div>

				<!-- Features Item -->
				<div class="col-md-4">
						<div class="text-center trans_400">
							<img src="images/icon_2.png">
							<h4 class="font-weight-bold my-4">Soal</h4>
							<p class="grey-text mb-md-0 mb-5">Terdapat berbagai macam soal untuk menguji pemahaman tentang query.
							</p>
						</div>
				</div>

				<!-- Features Item -->
				<div class="col-md-4">
						<div class="text-center trans_400">
							<img src="images/class (1).png" style="width:70px;length:55px;">
							<h4 class="font-weight-bold my-4">Pembahasan</h4>
							<p class="grey-text mb-md-0 mb-5">kami juga menyediakan berbagai macam pembahasan soal untuk membantu dalam memecahkan persoalan.
							</p>
						</div>
				</div>


				<!-- Features Item -->


			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<footer class="footer">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text offset-md-5"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>

	</footer>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
