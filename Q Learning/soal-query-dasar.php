<!DOCTYPE html>
<html lang="en">

<head>
	<title>Q-Learning</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	.margin1 {
		margin-left: 20px;
	}

	.font1 {
		font-size: 18px;
		font-weight: 500;
	}

	.navbar-nav li.active {
		border-bottom: 5px solid #5BC0EB;
	}
</style>

<body>
{elapsed_time}
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
									<div style="margin: 20px 10px;" class="logo_text">Q-LEAR
										<span>NING</span>
									</div>
								</a>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5">
								<ul class="nav justify-content-end">
									<li class="nav-item">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
										    aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"></span>
										</button>
									</li>
								</ul>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav">
										<li class="nav-item active margin1">
											<a class="nav-link dropbtn font1" style="color:#14bdee;" href="index.php">Beranda
												<span class="sr-only">(current)</span>
											</a>
										</li>
										<li class="nav-item dropdown margin1">
											<a class="nav-link dropbtn dropdown-toggle font1" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true"
											    aria-expanded="false">
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
													<li class="dropdown-item" style="padding:0%"><a href="#">Pengenalan</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="#">Inner Join</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="#">Natural Join</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="#">Cross Join</a></li>
												</ul>
											</li>
										</ul>
										</li>
										<li class="nav-item dropdown margin1">
											<a class="nav-link dropbtn dropdown-toggle font1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
											    aria-expanded="false">
												Soal
											</a>
											<div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="soal-query-dasar.html">Basic Query</a>
												<a class="dropdown-item" href="#">Intermediate Query</a>
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
									<li><a href="index.html">Beranda</a></li>
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
											<a href="#" class="dropbtn"style="color:#14bdee;">Soal <i class="fa fa-caret-down"></i></a>
										</li>
										<div class="dropdown-content">
                      <a href="soal-query-dasar.html"style="color:#14bdee;">Query Dasar</a>
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
			<div class="menu_close_container">
				<div class="menu_close">
					<div></div>
					<div></div>
				</div>
			</div>

			<nav class="menu_nav">

			</nav>
		</div>

		<!-- Home -->

		<!-- Home Slider Item -->
		<div class="owl-item">
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
		</div>

		<!-- Home Slider Item -->
		<div class="owl-item">
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
		</div>

	</div>
	</div>

	<!-- Home Slider Nav -->


	</div>

	<!-- Features -->

	Copy the entire text BELOW THIS STATEMENT. Then replace the text in pink with your own text, while leaving the blue text
	intact. Save the document as "documentname.html" (e.g., quiz1.html), and you are ready to post it on your server!
	<html>

	<head>
		<title>multiple-choice quiz form</title>
	</head>

	<body bgcolor=#ffffff>

		<h3>Vocabulary Quiz I</h3>
		<div class="container" style="margin-top : 5%">
			<h3 style="color:orangered;">Pilihlah salah satu jawaban yang benar dari soal dibawah ini </h3>
			<form method="post" action="#" enctype="text/plain">

				<img src="images/sc_CASETools2_image004.jpg" style="margin-top:2%;margin-bottom:2%;">
				<p>Untuk menjawab soal 1,2, dan 3 perhatikan gambar di atas! </p>
				<P id="p1" > 1. sytanx sql yang benar untuk menampilkan tabel first name dan last name adalah?
					<BR>
					<input type="radio" name="soal1" value="A">select firstname, lastname from employees
					<BR>
					<input type="radio" name="soal1" value="B">select first_name, last_name from employees;
					<BR>
					<input type="radio" name="soal1" value="C">select First_name, last_name from Employees;
					<BR>
					<input type="radio" name="soal1" value="D">select from Employees
					<BR>
				</p>

				<P id="p2"> 2. syntax sql untuk menampilkan first name dan salary yang lebih dari 20000 adalah y
					<BR>
					<input type="radio" name="soal2" value="A">select first_name salary 20000 from employees
					<BR>
					<input type="radio" name="soal2" value="B">select first_name salary from employees
					<BR>
					<input type="radio" name="soal2" value="C">select first_name salary where salary=20000 employees;
					<BR>
					<input type="radio" name="soal2" value="D">select first_name salary where salary=salary 20000 from employees;
					<BR>
				</p>

				<P id="p3" >3. The word which means "suitcase" is:
					<BR>
					<input type="radio" name="soal3" value="A">renard
					<BR>
					<input type="radio" name="soal3" value="B">valise
					<BR>
					<input type="radio" name="soal3" value="C">soleil
					<BR>
					<input type="radio" name="soal3" value="D">poisson
					<BR>
				</p>

				<P id="p4" >4. Tamplikanlah seluruh field yang berada didalam tabel barang:
					<BR>
					<input type="radio" name="soal4" value="A">SQL> select * from barang;
					<BR>
					<input type="radio" name="soal4" value="B">SQL> select * to barang;
					<BR>
					<input type="radio" name="soal4" value="C">SQL> select * from table barang;
					<BR>
					<input type="radio" name="soal4" value="D">SQL> select * from new barang;
					<BR>
				</p>

				<P id="p5" >5. Tampilkan kode barang,nama barang dari tabel barang yang jumalh stok nya 20:
					<BR>
					<input type="radio" name="soal5" value="A">SQL> SELECT ON KODE_BARANG,NAMA_BARANG FROM BARANG WHERE STOCK_BARANG=20;
					<BR>
					<input type="radio" name="soal5" value="B">SQL> SELECT KODE_BARANG,NAMA_BARANG FROM BARANG WHERE STOCK_BARANG=20;
					<BR>
					<input type="radio" name="soal5" value="C">SELECT TO KODE_BARANG,NAMA_BARANG FROM BARANG WHERE STOCK_BARANG=20;
					<BR>
					<input type="radio" name="soal5" value="D">SELECT FROM KODE_BARANG,NAMA_BARANG FROM BARANG WHERE STOCK_BARANG=20;
					<BR>
				</p>

				<P id="p6" >6. Tampilkan last name,salary dari tabel employees yang salary nya lebih besar dari 12000:
					<BR>
					<input type="radio" name="soal6" value="A">SQL> select last_name,salary to employees where salary>12000;
					<BR>
					<input type="radio" name="soal6" value="B">SQL> select last_name,salary on employees where salary>12000;
					<BR>
					<input type="radio" name="soal6" value="C">select last_name,salary from employees where salary>12000;
					<BR>
					<input type="radio" name="soal6" value="D">SQL> select last_name,salary employees where salary>12000;
					<BR>
				</p>

				<P id="p7" >7. Tampilkan salary tertinggi dengan kolom alias “GAJI TERTINGGI” dan untuk yang terendah dengan kolom alias “GAJI TERENDAH”:
					<BR>
					<input type="radio" name="soal7" value="A">Select value max(salary) as "GAJI TERTINGGI",min(salary) as "GAJI TERENDAH" from employees;
					<BR>
					<input type="radio" name="soal7" value="B">select max(salary) as "GAJI TERTINGGI",min(salary) as "GAJI TERENDAH" from employees;
					<BR>
					<input type="radio" name="soal7" value="C">select to max(salary) as "GAJI TERTINGGI",min(salary) as "GAJI TERENDAH" from employees;
					<BR>
					<input type="radio" name="soal7" value="D">select on max(salary) as "GAJI TERTINGGI",min(salary) as "GAJI TERENDAH" from employees;
					<BR>
				</p>
				<br>
				<br>
				<br>
				<br>
				<input type="button" value="submit" onclick="return checkSoal(this)" class="btn btn-primary" style="margin-left:50%; margin-bottom:5%;">

			</form>
		</div>
	</body>

	</html>


	<!-- Features Item -->


	</div>
	</div>
	</div>

	<!-- Popular Courses -->

	<footer class="footer">
		<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
			<div class="cr_text offset-md-5">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;
				<script>
					document.write(new Date().getFullYear());
				</script> All rights reserved </a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</div>
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
	<script>
	function checkSoal(tform){
		var jwb1 = document.querySelector('input[name="soal1"]:checked').value;
		var jwb2 = document.querySelector('input[name="soal2"]:checked').value;
		var jwb3 = document.querySelector('input[name="soal3"]:checked').value;
		var jwb4 = document.querySelector('input[name="soal4"]:checked').value;
		var jwb5 = document.querySelector('input[name="soal5"]:checked').value;
		var jwb6 = document.querySelector('input[name="soal6"]:checked').value;
		var jwb7 = document.querySelector('input[name="soal7"]:checked').value;
		var status = new Array();
		var jum;
		if (jwb1 == "A" ){
			status[0]="BENAR";
		} else {
			status[0]="SALAH";
		};
		if (jwb2 == "B"){
			status[1]="BENAR";
			hasil
		} else {
			status[1]="SALAH";
		};
		if (jwb3 == "C"){
			status[2]="BENAR";
		}else {
			status[2]="SALAH";
		};
		if (jwb4 == "B"){
			status[2]="BENAR";
		}else {
			status[2]="SALAH";
		};
		if (jwb5 == "B"){
			status[2]="BENAR";
		}else {
			status[2]="SALAH";
		};
		if (jwb6 == "C"){
			status[2]="BENAR";
		}else {
			status[2]="SALAH";
		};
		if (jwb7 == "B"){
			status[2]="BENAR";
		}else {
			status[2]="SALAH";
		};
		//document.getElementById("p"+jum.toString()).innerHTML="No " + jum + "  " + status[0] + "<br/>";
		for (var i=0; i<status.length; i++) {
			jum = i+1;
  			document.getElementById("p"+jum.toString()).innerHTML=jum+". " + status[i] + "<br/>";

		}
		
	}
	</script>
</body>

</html>
