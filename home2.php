<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

</body>

</html>

<h2>Daftar Kue</h2>

<style></style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LaCake Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/kue.jpg" rel="icon">
  <link href="assets/img/kue.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: LaCake
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">LaCake</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
          <li><a class="nav-link scrollto" href="transaksi.php">Transaksi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat Datang di <span>LaCake</span></h1>
      <h2>Di sini kami menyediakan berbagai macam kue yang dapat anda hidangkan di acara manapun</h2>
    </div>
  </section><!-- End Hero -->

  <section id="menu" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Macam-Macam Cake yang ada di pemesanan</p>
        </div>


<div class="row">
  <?php
  include "koneksi.php";
  $qry_kue = mysqli_query($koneksi, "select * from kue");
  while ($dt_kue = mysqli_fetch_array($qry_kue)) {
    ?>

    <div class="col-md-3">
      <div class="card">
        <img src="assets/img/<?= $dt_kue['foto'] ?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">
            <?= $dt_kue['nama_kue'] ?>
          </h5>
          <p class="card-text">
            <?= substr($dt_kue['harga'], 0, 20) ?>
          </p>
          <a href="kue.php?id_kue=<?=$dt_kue['id_kue']?>" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <?php
  }
  ?>
</div>