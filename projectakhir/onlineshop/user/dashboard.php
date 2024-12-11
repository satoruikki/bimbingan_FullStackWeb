<?php

session_start();
if ($_SESSION['status_login'] != TRUE) {
  echo "
    <script>
      alert('Anda harus login terlebih dahulu');
      window.location.href = 'login.php';
    </script>
  ";
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
  <title>Online Shop</title>

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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active ">
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
                  <a class="nav-link text-white add-button" href="ad-listing.html"><i class="fa fa-plus-circle"></i> Add
                    Listing</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!--==================================
=            User Profile            =
===================================-->
  <section class="dashboard section">
    <!-- Container Start -->
    <div class="container">
      <!-- Row Start -->
      <div class="row">
        <div class="col-lg-4">
          <div class="sidebar">
            <!-- User Widget -->
            <div class="widget user-dashboard-profile">
              <!-- User Image -->
              <div class="profile-thumb">
                <img src="" alt="" class="rounded-circle">
              </div>
              <!-- User Name -->
              <h5 class="text-center"><?= $_SESSION['nama_lengkap'] ?></h5>
              <p>Joined February 06, 2017</p>
              <a href="user-profile.html" class="btn btn-main-sm">Edit Profile</a>
            </div>
            <!-- Dashboard Links -->
            <div class="widget user-dashboard-menu">
              <ul>
                <li class="active"><a href="dashboard-my-ads.html"><i class="fa fa-user"></i> My Ads</a></li>
                <li><a href="dashboard-favourite-ads.html"><i class="fa fa-bookmark-o"></i> Favourite Ads
                    <span>5</span></a></li>
                <li><a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Archived Ads
                    <span>12</span></a></li>
                <li><a href="dashboard-pending-ads.html"><i class="fa fa-bolt"></i> Pending Approval<span>23</span></a>
                </li>
                <li><a href="logout.php"><i class="fa fa-cog"></i> Logout</a></li>
                <li><a href="#!" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete
                    Account</a></li>
              </ul>
            </div>

            <!-- delete-account modal -->
            <!-- delete account popup modal start-->
            <!-- Modal -->
            <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
                    <h6 class="py-2">Are you sure you want to delete your account?</h6>
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                    <textarea class="form-control" name="message" id="" cols="40" rows="4"
                      class="w-100 rounded"></textarea>
                  </div>
                  <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-center">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- delete account popup modal end-->
            <!-- delete-account modal -->

          </div>
        </div>
        <div class="col-lg-8">
          <!-- Recently Favorited -->
          <div class="widget dashboard-container my-adslist">
            <h3 class="widget-header">My Ads</h3>
            <table class="table table-responsive product-dashboard-table">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Product Title</th>
                  <th class="text-center">Category</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $total_bayar = 0;

                if (!empty($_SESSION['keranjang'])):
                  foreach ($_SESSION['keranjang'] as $i => $data) {
                    $total_bayar = $total_bayar + ($data['harga'] * $data['jumlah']);
                    ?>
                    <tr>
                      <td class="product-thumb">
                        <img width="80px" height="auto" src="../assets/upload/produk/<?= $data['gambar'] ?>"
                          alt="image description">
                      </td>
                      <td class="product-details">
                        <h3 class="title"><?= $data['nama_produk'] ?></h3>
                        <span class="add-id"><strong>Jumlah : </strong><?= $data['jumlah'] ?> </span>
                        <span class="add-id"><strong>Harga : </strong>Rp. <?= number_format($data['harga']) ?> </span>
                        <span><strong>Total harga : </strong><time>Rp.
                            <?= number_format($data['harga'] * $data['jumlah']) ?></time> </span>
                        <span class="status active"><strong>Status</strong><?= $data['status'] ?></span>
                      </td>
                      <td class="product-category"><span class="categories"><?= $data['kategori'] ?></span></td>
                      <td class="action" data-title="Action">
                        <form action="checkout.php" method="POST">
                          <div class="">
                            <ul class="list-inline justify-content-center">
                              <li class="list-inline-item">
                                <input type="hidden" name="id_produk" value="<?= $data['id_produk'] ?>">
                                <button class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                  title="Hapus dari Keranjang" name="hapus_produk" type="submit">
                                  <i class="fa fa-trash"></i>
                                </button>
                              </li>
                            </ul>
                          </div>
                        </form>
                      </td>
                    </tr>
                  <?php } ?>
                <?php else: ?>
                  <tr>
                    <td>Keranjang kosong
                    </td>
                  </tr>
                <?php endif; ?>
              </tbody>
              <tfoot>
              <form action="checkout.php" method="POST">
                <tr>
                  <td colspan="3">Tipe pembayaran</td>
                  <td>
                    <select name="tipe_bayar" id="" class="form-control">
                      <option value="COD">COD (Cash on Delivery)</option>
                      <option value="Transfer">Transfer</option>
                      <option value="PayLater">PayLater</option>
                      <option value="Credit">Credit</option>
                    </select>
                  </td>
                </tr>
                <tr>

                <tr>
                  <td colspan="3">Kode Pos</td>
                  <td>
                    <input type="number" name="kode_pos" id="" class="form-control">
                  </td>
                </tr>

                <tr>
                  <td colspan="3">Alamat Pengiriman</td>
                  <td>
                    <input type="text" name="alamat_pengiriman" id="" class="form-control">
                  </td>
                </tr>

                <td colspan="2">
                  Total Bayar
                </td>
                <td>Rp. <?= number_format($total_bayar) ?></td>
                <td>
                    <div class="">
                      <button class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                        title="Checkout keranjang anda" name="checkout_produk" type="submit">
                        <i class="fa fa-eye"></i>
                      </button>
                    </div>
                </td>
                </tr>
                </form>
              </tfoot>
            </table>

          </div>

          <!-- pagination -->
          <div class="pagination justify-content-center">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="dashboard.html" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="dashboard.html">1</a></li>
                <li class="page-item active"><a class="page-link" href="dashboard.html">2</a></li>
                <li class="page-item"><a class="page-link" href="dashboard.html">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="dashboard.html" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- pagination -->

        </div>
      </div>
      <!-- Row End -->
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
              <a href="index.html" class=" ml-3"><img src="images/apps/apple-app-store.png" class="img-fluid"
                  alt=""></a>
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