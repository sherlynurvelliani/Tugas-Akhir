<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Narmada Park</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('') ?>assets/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url('') ?>assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo base_url('') ?>https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('') ?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('') ?>assets/assets/css/style.css" rel="stylesheet">

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
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->


<!-- ======= Intro Section ======= -->
  <section id="intro">

    <div class="intro-text">
      <h2>Pesan Tiket </h2>
    </div>
  </section><!-- End Intro Section -->

  <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Formulir Pendaftaran</h3>
          <p class="section-description">Silahkan mendaftar pada form yang disiapkan</p>
          <span class="section-divider"></span>
        </div>
     

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					
					<!-- /.card-header -->
					<div class="card-body">
						<?php 

//notifikasi error
						echo validation_errors('<div class="alert alert-warning">','</div>');

//form open
						echo form_open(base_url('admin/pengunjung/tambah'),'class="form-horizontal"');
						?>

						<!-- nama pengunjung -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Nama Pengunjung</label>
							<div class="col-md-5">
								<input type="text" name="nama" class="form-control" placeholder="Nama Pengunjung" value="<?php echo set_value('nama')?>" >
							</div>
						</div>

						<!-- no hp -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">No Hp</label>
							<div class="col-md-5">
								<input type="text" name="no_hp" class="form-control" placeholder="No hp" value="<?php echo set_value('no_hp')?>" >
							</div>
						</div>

						<!-- tanggal pemesanan  -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Tanggal Pemesanan</label>
							<div class="col-md-5">
								<input type="date" name="tanggal" class="form-control" placeholder="tanggal pemesanan" value="<?php echo set_value('tanggal')?>" required>
							</div>
						</div>

						<!-- kategori tiket -->
						<div class="form-group row">
							<label for="inputkt" class="col-md-2 col-form-label">Kategori Tiket</label>
							<div class="col-md-5">
							<select class="form-control" name="kategori" id="inputkt" placeholder="pilih jumlah">
								<?php 
							foreach ($tiket as $tiket) : ?>
						<option value="<?php echo $tiket->kategori;?>"> <?php echo $tiket->kategori; ?></option>
							<?php endforeach; ?>
								</select>
							</div>
						</div>

						<!-- jumlah tiket -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Jumlah Tiket</label>
							<div class="col-md-5">
								<input type="text" name="jumlah" class="form-control" placeholder="jumlah tiket" value="<?php echo set_value('jumlah')?>" required>
							</div>
						</div>


						<!-- total harga  -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Total Harga</label>
							<div class="col-md-5">
								<input type="text" name="harga" class="form-control" placeholder="total harga" value="<?php echo set_value('harga')?>" required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-2 col-form-label"></label>
							<div class="col-md-5">
								<button class="btn btn-success btn-sm" name="submit" type="submit">
									<i class="fa fa-save"></i> Simpan
								</button>

								<button class="btn btn-info btn-sm" name="reset" type="reset">
									<i class="fa fa-times"></i> Reset
								</button>

							</div>
						</div>

						<?php echo form_close(); ?>
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
	</section>