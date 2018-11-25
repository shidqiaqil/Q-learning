<!DOCTYPE html>
<html lang="en">
<head>
<title>Query Dasar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/dropdown.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">

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
									<li class="nav-item margin1">
										<a class="nav-link dropbtn font1" href="index.php">Beranda <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item active dropdown margin1">
										<a class="nav-link dropbtn dropdown-toggle font1" style="color:#14bdee;" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
													<li class="dropdown-item" style="padding:0%"><a style="color:#14bdee;" href="materi-fungsi.php">Fungsi</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="materi-kondisional.php">Kondisional</a></li>
													<li class="dropdown-divider"></li>
													<li class="dropdown-item" style="padding:0%"><a href="materi-orderby.php">Order By</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Intermediate Query</a>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-item" style="padding:0%"><a href="pengenalan.php">Pengenalan</a></li>
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
											<a class="dropdown-item" href="soal-query-dasar.html">Basic Query</a>
											<a class="dropdown-item" href="Pengenalan-intermediete.php">Intermediate Query</a>
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
									<li><a href="#">Beranda</a></li>
									<div class="dropdown">
									  <li>
											<a href="#" class="dropbtn " style="color: #14bdee; ">Materi <i class="fa fa-caret-down"></i></a>
										</li>
									  <div class="dropdown-content">
									    <a href="#">Pengenalan</a>
									    <a href="#">Query Dasar</a>
									    <a href="#" style="color: #14bdee;">Operator</a>
											<a href="#">Fungsi</a>
											<a href="#">Kondisional</a>
											<a href="#">Order by</a>
									  </div>
									</div>
									<div class="dropdown">
										<li>
											<a href="#" class="dropbtn">Soal <i class="fa fa-caret-down"></i></a>
										</li>
										<div class="dropdown-content">
											<a href="#">Link 1</a>
											<a href="#">Link 2</a>
											<a href="#">Link 3</a>
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


	<!-- Home -->

	<!-- <div class="home">

	</div> -->

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">

					<div class="course_container" style="margin-top:6%;">
						<!-- <div class="course_title">Operator</div> -->
						<div style="margin-top:3%;" class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Durasi :</div>
								<div class="course_info_text"><a href="#">12:30</a></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Materi :</div>
								<div class="course_info_text"><a href="#">Fungsi</a></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Kategori :</div>
								<div class="course_info_text"><a href="#">Query Dasar</a></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image">
							<iframe width="100%" height="350px" src="https://www.youtube.com/embed/HWqJSKmRYRA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">description</div>
								<div class="tab ">Diskusi</div>
							</div>
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel active">
									<div class="tab_panel_title text-center">FUNGSI</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p style="text-align: justify;">Berikut merupakan fungsi – fungsi yang bisa digunakan untuk sql query :</p>
											<table class="table table-bordered text-dark">
												<tr>
													<td>LOWER(kolom)</td>
													<td>Mengkonversikan kolom menjadi huruf kecil semua</td>
												</tr>
												<tr>
													<td>UPPER(kolom)</td>
													<td>Mengkonversikan kolom menjadi huruf kapital semua</td>
												</tr>
												<tr>
													<td>INITCAP(kolom)</td>
													<td>Mengkonversikan huruf pertama dari setiap kata menjadi kapital</td>
												</tr>
												<tr>
													<td>CONCAT(kolom1,kolom2)</td>
													<td>Menggabungkan hanya 2 string, ekivalen dengan (||)</td>
												</tr>
												<tr>
													<td>LENGTH(kolom)</td>
													<td>Menghasilkan panjang suatu string</td>
												</tr>
												<tr>
													<td>SUBSTR(kolom,m,[n])</td>
													<td>Memotong String dimulai dari karakter ke m sebanyak n karakter. Jika n tidak dituliskan maka pemotongan akan dilakukan sampai akhir string</td>
												</tr>
												<tr>
													<td>LPAD(kolom,n,[‘string2’])
															RPAD(kolom,n,[‘string2’])</td>
													<td>Menambah disebelah kiri (LPAD) atau kanan (RPAD) dari ekspresi dengan string2 hingga mencapai n.</td>
												</tr>
												<tr>
													<td>TO_CHAR(kolom,’format’)</td>
													<td>Mengkonversi data tipe date menjadi karakter</td>
												</tr>
												<tr>
													<td>TO_NUMBER(char,’format’)</td>
													<td>Mengkonversi tipe data char menjadi number</td>
												</tr>
												<tr>
													<td>TO_DATE(char,’format’)</td>
													<td>Mengkonversi tipe data char menjadi date</td>
												</tr>
												<tr>
													<td>NVL(ex1,ex2)</td>
													<td>Menggantikan nilai dengan ex2 jika nilai ditemukan pada ex1 adalah NULL</td>
												</tr>
												<tr>
													<td>NVL2(ex1,ex2,ex3)</td>
													<td>Menguji nilai ex1, kemudian memberikan nilai ex2 apabila ex1 not null dan memberikan nilai ex3 apabila ex1 bernilai null</td>
												</tr>
												<tr>
													<td>NULLIF(ex1,ex2)</td>
													<td>Mengembalikan nilai NULL jika ex1 sama dengan ex2 dan akan mengembalikan nilai ex1 jika nilai ex1 tidak sama dengan ex2</td>
												</tr>
												<tr>
													<td>COALESCE(ex1,ex2,…,exN)</td>
													<td>Menghasilkan nilai ex pertama yang tidak NULL, fungsi ini akan menghasilkan nilai NULL, jika semua ekspresi bernilai NULL</td>
												</tr>
											</table>
										</div>

										<div class="tab_panel_faq">
											<div class="tab_panel_title"></div>

											<!-- Accordions -->
											<div class="accordions">

												<div class="elements_accordions">









												</div>

											</div>
										</div>
									</div>
								</div>

								<!-- Curriculum -->
								<div class="tab_panel tab_panel_2">
									<div class="tab_panel_content">
										<?php 
											include 'koneksi.php';
											$sql = "SELECT nama, komen FROM komentar WHERE idmateri = 3";
											$query = mysqli_query($conn,$sql);
											$row = mysqli_num_rows($query);
											if ($row>0){
												while ($row = mysqli_fetch_array($query)){ ?>
													<div class="tab_panel_title"><?php echo $row['nama']; ?></div>
													<div class="tab_panel_content">
														<div class="tab_panel_text">
															<p><?php echo $row['komen']; ?></p>
														</div>

														<!-- Dropdowns -->
													</div>
													<hr>
										<?php
												}
											}else{ ?>
												<div class="tab_panel_content">
													<div class="tab_panel_text">
														<p class="text-center">Belum Ada Diskusi</p>
													</div>

													<!-- Dropdowns -->
												</div>
										<?php
											}
										?>
									</div>
								</div>

								<!-- Reviews -->
								<div class="tab_panel tab_panel_3">
									<div class="tab_panel_title">Course Review</div>

									<!-- Rating -->
									<div class="review_rating_container">
										<div class="review_rating">
											<div class="review_rating_num">4.5</div>
											<div class="review_rating_stars">
												<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
											</div>
											<div class="review_rating_text">(28 Ratings)</div>
										</div>
										<div class="review_rating_bars">
											<ul>
												<li><span>5 Star</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
												<li><span>4 Star</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
												<li><span>3 Star</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
												<li><span>2 Star</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
												<li><span>1 Star</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
											</ul>
										</div>
									</div>

									<!-- Comments -->
									<div class="comments_container">
										<ul class="comments_list">
											<li>
												<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
													<div class="comment_image"><div><img src="images/comment_1.jpg" alt=""></div></div>
													<div class="comment_content">
														<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author"><a href="#">Milley Cyrus</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">1 day ago</div>
														</div>
														<div class="comment_text">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
														</div>
														<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
															<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
															<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
														</div>
													</div>
												</div>
												<ul>
													<li>
														<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
															<div class="comment_image"><div><img src="images/comment_2.jpg" alt=""></div></div>
															<div class="comment_content">
																<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_author"><a href="#">John Tyler</a></div>
																	<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
																	<div class="comment_time ml-auto">1 day ago</div>
																</div>
																<div class="comment_text">
																	<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
																</div>
																<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
																	<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
													<div class="comment_image"><div><img src="images/comment_3.jpg" alt=""></div></div>
													<div class="comment_content">
														<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author"><a href="#">Milley Cyrus</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">1 day ago</div>
														</div>
														<div class="comment_text">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
														</div>
														<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
															<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
															<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
														</div>
													</div>
												</div>
											</li>
										</ul>
										<div class="add_comment_container">
											<div class="add_comment_title">Add a review</div>
											<div class="add_comment_text">You must be <a href="#">logged</a> in to post a comment.</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar" style="padding-top:45px;">

						<!-- Feature -->
						<div class="sidebar_section" style="border: 1px solid #14bdee;">
							<div class="container">
								<div class="sidebar_section_title mt-3">Diskusi</div>
								<div class="sidebar_feature">


									<!-- Features -->
									<div class="feature_list">

										<!-- Feature -->
										<form class="counter_form_content d-flex flex-column" method="post" action="komen.php">
											<label for="nama"><b>Nama : </b></label>
											<input type="text" id="nama" name="nama" class="counter_input  align-items-center justify-content-center" placeholder="Your Name:" required="required">
											<label for="komen"><b>Pesan : </b></label>
											<textarea id="komen" name="komen" class="counter_input counter_text_input  align-items-center justify-content-center" placeholder="Message:" required="required"></textarea>
											<button id="kirimfungsi" name="kirimfungsi" type="submit" class="counter_form_button mb-3">Kirim</button>
										</form>

										<!-- Feature -->

									</div>
								</div>
							</div>
						</div>

						<!-- Feature -->


						<!-- Latest Course -->

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->





	<!-- Footer -->


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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/course.js"></script>
</body>
</html>
