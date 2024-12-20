<?php

include '../config/koneksi.php';

if (isset($_POST['submit'])) {

  $nama_gambar = $_FILES['foto']['name'];
    // tipe/ekstensi foto (png, jpg, jpeg, pdf, docx)
    $tipe_gambar = $_FILES['foto']['type'];
    // tempat sementara file tersimpan 
    // dipindahkan ke folder yg kita buat
    $tmp_gambar  = $_FILES['foto']['tmp_name'];
    $size_gambar  = $_FILES['foto']['size'];
    $error_gambar  = $_FILES['foto']['error'];

    $folder = "../assets/upload/akun/";

    // validasi ukuran file
    if ($size_gambar > 2097152) { // = 2mb -> 2 * 1024 * 1024
        echo "
            <script>
                alert('File yang anda upload harus dibawah 2mb');
                window.location.href = 'register.php';
            </script>
        ";
    }

    // validasi tipe gambar
    $ekstensiLolos = ['image/png', 'image/jpg', 'image/jpeg'];
    if (!in_array($tipe_gambar, $ekstensiLolos)) {
        echo "
            <script>
                alert('File harus bertipe png/jpg/jpeg');
                window.location.href = 'register.php';
            </script>
        ";
    }


    // proses pindahkan file fke folder yang dibuat
    $pathUpload = $folder . basename($nama_gambar);

    if (move_uploaded_file($tmp_gambar, $pathUpload)) {
        echo "
            <script>
                alert('File terupload');
            </script>
        ";
    }

  $email= $_POST ['email'];
  $nama_lengkap= $_POST ['nama_lengkap'];
  $username = $_POST ['username'];
  $alamat = $_POST ['alamat'];
  $no_telpon = $_POST ['no_telpon'];
  $password = $_POST ['password'];

  $sql = "INSERT INTO tb_akun (nama_lengkap, alamat, no_telpon, username, email, password, foto)
          VALUES ('$nama_lengkap', '$alamat', '$no_telpon', '$username','$email', '$password', '$nama_gambar')
  ";

  if ($koneksi->query($sql) === TRUE) {
    echo "
      <script>
        alert('Berhasil register akun, silahkan login menggunakan email anda');
        window.location.href = 'login.php'
      </script>
    ";
  }
  else {
    echo "
    <script>
      alert('Gagal register');
      window.location.hraf = 'register.php'
    </script>
    ";
  }

}


?>


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
  <title>Classimax | Classified Marketplace Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="classimax" />

  <!-- favicon -->
  <link href="images/favicon.png" rel="shortcut icon">

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
					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
								<a class="nav-link text-white add-button" href="ad-listing.html"><i class="fa fa-plus-circle"></i> Add Listing</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>

<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border border">
          <h3 class="bg-gray p-4">Register Now</h3>
          <form action="" enctype="multipart/form-data" method="POST">
            <fieldset class="p-4">
              <input name="email" class="form-control mb-3" type="email" placeholder="Email" required>
              <input name="nama_lengkap" class="form-control mb-3" type="text" placeholder="Nama Lengkap" required>
              <input name="username" class="form-control mb-3" type="text" placeholder="Username" required>
              <input name="alamat" class="form-control mb-3" type="text" placeholder="Alamat" required>
              <input name="no_telpon" class="form-control mb-3" type="number" placeholder="No Telpon" required>
              <input name="password" class="form-control mb-3" type="password" placeholder="Password" required>
              <input name="foto" class="form-control mb-3" type="file" placeholder="Upload Foto" required>
              
              <button name="submit" type="submit" class="btn btn-primary font-weight-bold mt-3">Register Now</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
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
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
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
            <a href="index.html"><img src="images/apps/google-play-store.png" class="img-fluid" alt=""></a>
            <a href="index.html" class=" ml-3"><img src="images/apps/apple-app-store.png" class="img-fluid" alt=""></a>
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
          <p>Copyright &copy; <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. Designed & Developed by <a class="text-white" href="https://themefisher.com">Themefisher</a></p>
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