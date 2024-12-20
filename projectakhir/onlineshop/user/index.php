<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>Online shop </title>

	<!-- ** Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

	<!-- theme meta -->
	<meta name="theme-name" content="classimax" />

	<!-- favicon -->
	<link href="../assets/upload/ikki.jpg" rel="shortcut icon">

	<!-- 
  Essential stylesheets
  =====================================-->
	<link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="plugins/slick/slick.css" rel="stylesheet">
	<link href="plugins/slick/slick-theme.css" rel="stylesheet">
	<link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">


	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						<a class="navbar-brand" href="index.php">
							<img src="../assets/upload/logo.jpg" alt="" width="300">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="index.php">Home</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link" href="dashboard.php">My Dashboard</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link" href="about-us.php">About Us</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link" href="ad-list-view.php">All Products</a>
								</li>

							</ul>
							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
									<a class="nav-link login-button" href="login.php">Login</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white add-button" href="ad-listing.html"><i
											class="fa fa-plus-circle"></i> Add Listing</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<!--===============================
=            Hero Area            =
================================-->

	<section class="hero-area bg-1 text-center overly">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Buy & Sell Near You </h1>
						<p>Join the millions who buy and sell from each other <br> everyday in local communities around
							the world</p>
						<div class="short-popular-category-list text-center">
							<h2>Popular Category</h2>
							<ul class="list-inline">
								<li class="list-inline-item">
									<a href="category.html"><i class="fa fa-bed"></i> Hotel</a>
								</li>
								<li class="list-inline-item">
									<a href="category.html"><i class="fa fa-grav"></i> Fitness</a>
								</li>
								<li class="list-inline-item">
									<a href="category.html"><i class="fa fa-car"></i> Cars</a>
								</li>
								<li class="list-inline-item">
									<a href="category.html"><i class="fa fa-cutlery"></i> Restaurants</a>
								</li>
								<li class="list-inline-item">
									<a href="category.html"><i class="fa fa-coffee"></i> Cafe</a>
								</li>
							</ul>
						</div>

					</div>
					<!-- Advance Search -->
					<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
									<form>
										<div class="form-row">
											<div class="form-group col-xl-4 col-lg-3 col-md-6">
												<input type="text" class="form-control my-2 my-lg-1" id="inputtext4"
													placeholder="What are you looking for">
											</div>
											<div class="form-group col-lg-3 col-md-6">
												<select class="w-100 form-control mt-lg-1 mt-md-2">
													<option>Category</option>
													<option value="1">Top rated</option>
													<option value="2">Lowest Price</option>
													<option value="4">Highest Price</option>
												</select>
											</div>
											<div class="form-group col-lg-3 col-md-6">
												<input type="text" class="form-control my-2 my-lg-1" id="inputLocation4"
													placeholder="Location">
											</div>
											<div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
												<button type="submit" class="btn btn-primary active w-100">Search
													Now</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>


	<!--===========================================
=            Popular deals section            =
============================================-->

	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Trending Adds</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-lg-12">
					<div class="trending-ads-slide">
						<?php
						include ("../config/koneksi.php");

						$sql = "SELECT a.*, b.nama_kategori as kategori FROM tb_produk as a JOIN tb_kategori as b ON a.id_kategori = b.id";
						$hasil= mysqli_query($koneksi, $sql);

						while ($row = mysqli_fetch_assoc($hasil)) {

						?>
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.php?id=<?= $row ['id'] ?>">
											<img class="card-img-top img-fluid" src="../assets/upload/produk/<?= $row['gambar'] ?> "width="50"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.php?id=<?= $row ['id'] ?>"><?= $row['nama_produk'] ?></a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.php?id=<?= $row ['id'] ?>"><i class="fa fa-folder-open-o"></i><?= $row['kategori'] ?></a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text"><?= $row['deskripsi'] ?></p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>



						</div>

						<?php } ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>



	<!--==========================================
=            All Category Section            =
===========================================-->

	<section class=" section">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Section title -->
					<div class="section-title">
						<h2>All Categories</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
					</div>
					<div class="row">
						<!-- Category list -->
						 <?php
						$sql = "SELECT * FROM tb_kategori";
						$hasil_k= mysqli_query($koneksi, $sql);
						while ($row = mysqli_fetch_assoc($hasil_k)) {


						 ?>
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-laptop icon-bg-1"></i>
									<h4><?= $row['nama_kategori'] ?></h4>
								</div>
								
							</div>
						</div> <!-- /Category List -->
						


					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<!-- Container End -->
	</section>


	<!--====================================
=            Call to Action            =
=====================================-->

	<section class="call-to-action overly bg-3 section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row justify-content-md-center text-center">
				<div class="col-md-8">
					<div class="content-holder">
						<h2>Start today to get more exposure and
							grow your business</h2>
						<ul class="list-inline mt-30">
							<li class="list-inline-item"><a class="btn btn-main" href="ad-listing.html">Add Listing</a>
							</li>
							<li class="list-inline-item"><a class="btn btn-secondary" href="category.html">Browser
									Listing</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>

	<!--============================
=            Footer            =
=============================-->

	<footer class="footer section section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
					<!-- About -->
					<div class="block about">
						<!-- footer logo -->
						<img src="images/logo-footer.png" alt="logo">
						<!-- description -->
						<p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco
							laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
					<div class="block">
						<h4>Site Pages</h4>
						<ul>
							<li><a href="dashboard-my-ads.html">My Ads</a></li>
							<li><a href="dashboard-favourite-ads.html">Favourite Ads</a></li>
							<li><a href="dashboard-archived-ads.html">Archived Ads</a></li>
							<li><a href="dashboard-pending-ads.html">Pending Ads</a></li>
							<li><a href="terms-condition.html">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
					<div class="block">
						<h4>Admin Pages</h4>
						<ul>
							<li><a href="category.html">Category</a></li>
							<li><a href="single.html">Single Page</a></li>
							<li><a href="store.html">Store Single</a></li>
							<li><a href="single-blog.html">Single Post</a>
							</li>
							<li><a href="blog.html">Blog</a></li>



						</ul>
					</div>
				</div>
				<!-- Promotion -->
				<div class="col-lg-4 col-md-7">
					<!-- App promotion -->
					<div class="block-2 app-promotion">
						<div class="mobile d-flex  align-items-center">
							<a href="index.html">
								<!-- Icon -->
								<img src="images/footer/phone-icon.png" alt="mobile-icon">
							</a>
							<p class="mb-0">Get the Dealsy Mobile App and Save more</p>
						</div>
						<div class="download-btn d-flex my-3">
							<a href="index.html"><img src="images/apps/google-play-store.png" class="img-fluid"
									alt=""></a>
							<a href="index.html" class=" ml-3"><img src="images/apps/apple-app-store.png"
									class="img-fluid" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</footer>
	<!-- Footer Bottom -->
	<footer class="footer-bottom">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
					<!-- Copyright -->
					<div class="copyright">
						<p>Copyright &copy;
							<script>
								var CurrentYear = new Date().getFullYear()
								document.write(CurrentYear)
							</script>. Designed & Developed by <a class="text-white" href="https://themefisher.com">Themefisher</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<!-- Social Icons -->
					<ul class="social-media-icons text-center text-lg-right">
						<li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher"></a></li>
						<li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher"></a></li>
						<li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"></a></li>
						<li><a class="fa fa-github-alt" href="https://www.github.com/themefisher"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Container End -->
		<!-- To Top -->
		<div class="scroll-top-to">
			<i class="fa fa-angle-up"></i>
		</div>
	</footer>

	<!-- 
Essential Scripts
=====================================-->
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/bootstrap/popper.min.js"></script>
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<script src="plugins/bootstrap/bootstrap-slider.js"></script>
	<script src="plugins/tether/js/tether.min.js"></script>
	<script src="plugins/raty/jquery.raty-fa.js"></script>
	<script src="plugins/slick/slick.min.js"></script>
	<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
	<script src="plugins/google-map/map.js" defer></script>

	<script src="js/script.js"></script>

</body>

</html>