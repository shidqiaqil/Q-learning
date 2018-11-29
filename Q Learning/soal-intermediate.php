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

		<!--onsubmit="return checkSoal(this)"-->
		<div class="container" style="margin-top : 5%">
			<h3 style="color:orangered;">Pilihlah salah satu jawaban yang benar dari soal dibawah ini </h3>
			<form method="post"  enctype="text/plain">

				<BR>
				<BR>
				<P id="p1" > 1. Operasi untuk mengambil informasi dari 2 tabel atau lebih dalam 1 waktu adalah pengertian dari ?
					<BR>
					<input type="radio" name="soal1" value="A">Follow
					<BR>
					<input type="radio" name="soal1" value="B">Join
					<BR>
					<input type="radio" name="soal1" value="C">Where
					<BR>
					<input type="radio" name="soal1" value="D">Constrain
					<BR>
				</p>

				<P id="p2"> 2. Manakah yang bukan jenis join ?
					<BR>
					<input type="radio" name="soal2" value="A">Natural join
					<BR>
					<input type="radio" name="soal2" value="B">Equi join
					<BR>
					<input type="radio" name="soal2" value="C">Non equi join
					<BR>
					<input type="radio" name="soal2" value="D">Non self join
					<BR>
				</p>

				<P id="p3" >3. Menggabungkan table-tabel dengan klausa klausa NATURAL JOIN, USING atau ON adalah fungsi dari ?
					<BR>
					<input type="radio" name="soal3" value="A">Natural join
					<BR>
					<input type="radio" name="soal3" value="B">Equi join
					<BR>
					<input type="radio" name="soal3" value="C">Inner join
					<BR>
					<input type="radio" name="soal3" value="D">Self join
					<BR>
				</p>

				<P id="p4" >4. Tampilkan Nomer nota,namabarang,harga, yang jenis barangnya (susu bayi) : 
					<BR>
					<input type="radio" name="soal4" value="A">SELECT Nonota,nmbrg,harga,jnsbrg FROM barang INNER JOIN pembelian ON barang.kdbrg=pembelian.kdbrg WHERE jnsbrg='susu bayi'
					<BR>
					<input type="radio" name="soal4" value="B">SELECT Nonota,nmbrg,harga,jnsbrg FROM pembelian INNER JOIN pembelian ON barang.kdbrg=pembelian.kdbrg WHERE jnsbrg='susu bayi'
					<BR>
					<input type="radio" name="soal4" value="C">SELECT Nonota,nmbrg,harga,jnsbrg FROM Supplier INNER JOIN pembelian ON barang.kdbrg=pembelian.kdbrg WHERE jnsbrg='susu bayi'
					<BR>
					<input type="radio" name="soal4" value="D">SELECT Nonota,nmbrg,harga,jnsbrg FROM admin INNER JOIN pembelian ON barang.kdbrg=pembelian.kdbrg WHERE jnsbrg='susu bayi'
					<BR>
				</p>

				<P id="p5" >5. Tampilkan nmsup, email, jekel pada table supplier menggunakan perintah inner Join dengan ketentuan memiliki Jumlah beli=150 menggunakan perintah Inner Join :
					<BR>
					<input type="radio" name="soal5" value="A">SELECT kdsup, email, jekel FROM pembeli INNER JOIN pembelian ON pembelian.kdsup= supplier.kdsup WHERE jumlahbeli=150;
					<BR>
					<input type="radio" name="soal5" value="B">SELECT nmsup, email, jekel FROM admin INNER JOIN pembelian ON pembelian.kdsup= supplier.kdsup WHERE jumlahbeli=150;
					<BR>
					<input type="radio" name="soal5" value="C">SELECT nmsup, email, jekel FROM supplier INNER JOIN pembelian ON pembelian.kdsup= supplier.kdsup WHERE jumlahbeli=150;
					<BR>
					<input type="radio" name="soal5" value="D">SELECT nmsup, email, jekel FROM barang INNER JOIN pembelian ON pembelian.kdsup= supplier.kdsup WHERE jumlahbeli=150;
					<BR>
				</p>

				<P id="p6" >6. Menampilkan semua data dari tabel pembelian dan supplier :
					<BR>
					<input type="radio" name="soal6" value="A">SELECT * FROM barang INNER JOIN supplier ON pembelian.kdsup = supplier.kdsup;
					<BR>
					<input type="radio" name="soal6" value="B">SELECT * FROM pembelian INNER JOIN supplier ON pembelian.kdsup = supplier.kdsup;
					<BR>
					<input type="radio" name="soal6" value="C">SELECT * FROM admin INNER JOIN supplier ON pembelian.kdsup = supplier.kdsup;
					<BR>
					<input type="radio" name="soal6" value="D">SELECT * FROM supplier INNER JOIN supplier ON pembelian.kdsup = supplier.kdsup;
					<BR>
				</p>

				<P id="p7" >7. Menampilkan semua data dari tabel barang dan pembelian : 
					<BR>
					<input type="radio" name="soal7" value="A">SELECT * FROM pembelian JOIN pembelian ON barang.kdbrg = pembelian.kdbrg
					<BR>
					<input type="radio" name="soal7" value="B">SELECT * FROM barang JOIN pembelian ON barang.kdbrg = pembelian.kdbrg
					<BR>
					<input type="radio" name="soal7" value="C">SELECT * FROM admin JOIN pembelian ON barang.kdbrg = pembelian.kdbrg
					<BR>
					<input type="radio" name="soal7" value="D">SELECT * FROM suplier JOIN pembelian ON barang.kdbrg = pembelian.kdbrg
					<BR>
				</p>
				<br>
				<br>
				<br>
				<br>
				<input type="button" value="submit" onclick="checkSoal(this)" class="btn btn-primary" style="margin-left:50%; margin-bottom:5%;">

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
		if (jwb1 == "B" ){
			status[0]="BENAR";
		} else {
			status[0]="SALAH";
		};
		if (jwb2 == "D"){
			status[1]="BENAR";
		} else {
			status[1]="SALAH";
		};
		if (jwb3 == "C"){
			status[2]="BENAR";
		}else {
			status[2]="SALAH";
		};
		if (jwb4 == "A"){
			status[3]="BENAR";
		}else {
			status[3]="SALAH";
		};
		if (jwb5 == "C"){
			status[4]="BENAR";
		}else {
			status[4]="SALAH";
		};
		if (jwb6 == "B"){
			status[5]="BENAR";
		}else {
			status[5]="SALAH";
		};
		if (jwb7 == "B"){
			status[6]="BENAR";
		}else {
			status[6]="SALAH";
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
