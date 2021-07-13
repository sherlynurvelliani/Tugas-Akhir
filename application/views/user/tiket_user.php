<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Narmada Park</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('') ?>assets/assets/img/lotus_50px.png" rel="icon">
  <link href="<?php echo base_url('') ?>assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="<?php echo base_url('') ?>https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('') ?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link href="<?php echo base_url('') ?>assets/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('') ?>assets/assets/css/style.css" rel="stylesheet">
  <script src="<?=base_url('assets')?>/assets/vendor/jquery/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: Avilon - v2.2.1
  * Template URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

 <header id="header" class="header-transparent">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.html" class="scrollto">NARMADA PARK</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Profil</a></li>
          <li><a href="#features">Informasi</a></li>
          <li><a href="<?php echo base_url('user/Tiket_user') ?>">Tiket</a></li>
          <li><a href="<?php echo base_url('user/Pengunjung_user') ?>">Pesan Tiket</a></li>
          <li><a href="#gallery">Galeri</a></li>
          <li><a href="#contact">Hubungi kami</a></li>
          <li><a href="<?= base_url('Login')?>">Masuk</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->


<!-- ======= Intro Section ======= -->
  <section id="intro">

    <div class="intro-text">
      <h2>Informasi Tiket Narmada Park</h2>
      
    </div>
  </section><!-- End Intro Section -->

  <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Paket</h3>
          <p class="section-description">Paket yang tersedia pada Narmada Park</p>
          <span class="section-divider"></span>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
              <h4>Paket 1</h4>
              <h3>IDR 2222</h3>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> 2 Tiket Dewasa</li>
                <li><i class="ion-android-checkmark-circle"></i> 2 Tiket Anak-Anak</li>
                <li><i class="ion-android-checkmark-circle"></i> 2 Ttiket Bebek-Bebekan</li>
                <li><i class="ion-android-checkmark-circle"></i> 4 Tiket Flying Fox</li>
              </ul>
              <a href="<?php echo base_url('user/Pengunjung_user') ?>" class="get-started-btn">Pesan</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
              <h4>Paket 2</h4>
              <h3>IDR 2222</h3>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> 4 Tiket Dewasa</li>
                <li><i class="ion-android-checkmark-circle"></i> 2 Tiket Bebek-Bebekan</li>
                <li><i class="ion-android-checkmark-circle"></i> 4 Tiket Flying Fox</li>
              </ul>
              <a href="<?php echo base_url('user/Pengunjung_user') ?>" class="get-started-btn">Pesan</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
              <h4>Paket 3 (WNA)</h4>
              <h3>IDR 2222</h3>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> 4 Tiket </li>
                <li><i class="ion-android-checkmark-circle"></i> 2 Tiket Bebek-Bebekan</li>
                <li><i class="ion-android-checkmark-circle"></i> 4 Tiket Flying Fox</li>
              </ul>
              <a href="<?php echo base_url('user/Pengunjung_user') ?>" class="get-started-btn">Pesan</a>
            </div>
          </div>
        

        </div>

      </section> -->
  <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Tiket</h3>
          <!-- <span class="section-divider"></span>
          <p class="section-description">Tiket terpisah yang tersedia pada Narmada Park</p> -->
        </div>
    </section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">

          <!-- /.card-header -->
          <div class="card-body">        
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>                 
                  <th>Kategori Tiket</th>
                  <th>Harga Tiket</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($tiket as $tiket){ ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $tiket->kategori ?></td>
                    <td><?php echo 'Rp ' . number_format ($tiket->harga) ?></td>
                    
                    
                  </tr>
                  <?php $no++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <!-- /.content -->

        <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Narmada Park</h3>
              <!-- <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p> -->
              <div class="social-links">
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Jl. Raya Mataram - Labuhan Lombok, Lembuak, Narmada, Kabupaten Lombok Barat, Nusa Tenggara Barat. 83371</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>narmadapark@gmail.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+62 823-4056-4761</p>
              </div>

            </div>
          </div>
         
         <div class="col-lg-4 col-md-4">
            <div class="textwidget">
              <h3>JAM OPERASIONAL</h3>
              <p>Kami buka setiap hari sepanjang tahun.<br/> Ini jam operasional kami:<br /></p>
                  <strong>Jam Buka:</strong> 09.00 am<br />
                  <strong>Jam Tutup:</strong> 04.00 pm<br />
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

      </div>