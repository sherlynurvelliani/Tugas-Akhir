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
	<link href="<?php echo base_url('') ?>assets/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url('') ?>assets/assets/vendor/venobox/venobox.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo base_url('') ?>assets/assets/css/style.css" rel="stylesheet">
	<script src="<?= base_url('assets') ?>/assets/vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


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
				<li><a href="<?= base_url('Login') ?>">Masuk</a></li>
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
			<h3 class="section-title">Bukti Pemesanan</h3>
			<!-- <span class="section-divider"></span> -->
		</div>
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body ">
								<table	class="table table-hover">
									<thead class="header_table">
										<th>No. Pesanan</th>
										<th class="text-right">Tanggal Pemesanan </th>
									</thead>
									<style>
										.header_table {
											background: teal;
											color: white;
										}
										.header_body {
											background-color: #739173;
											color: white;
										}
										/*tfoot{
											background-color: #739173;
										}*/
									</style>
									<tbody>
										<tr>
											<td><?= $isi->id_booking;?></td>
											<td class="text-right"><?= $isi->tanggal; ?></td>
										</tr>
										
									</tbody>
								</table>
								<table>
									<tr>
										<td>Nama Pengunjung </td>
										<td> :</td>
										<td><?= $isi->nama; ?></td>
									</tr>
									<tr>
										<td>Nomor Hp</td>
										<td>:</td>
										<td><?= $isi->no_hp; ?></td>
									</tr>
									<tr>
										<td>Status Bayar</td>
										<td>:</td>
										<td><?= $isi->status_bayar; ?></td>
									</tr>
								</table><br><br>
								<table class="table table-hover">
									<thead class="header_body text-center">
										<th>No.</th>
										<th>Nama Wisata</th>
										<th>Jumlah Dewasa</th>
										<th>Jumlah Anak</th>
										<th>Jumlah Wna</th>
									</thead>
									<tbody>
										<tr class="text-center">
											<td>1</td>
											<td>Wisata Narmada</td>
											<td><?= $isi->jml_dewasa; ?></td>
											<td><?= $isi->jml_anak; ?></td>
											<td><?= $isi->jml_wna; ?></td>
										</tr>
									</tbody>
								</table>
								<table class="container text-right">
									<tr>
										<td class="">Jumlah Pengunjung</td>
										<td class="container text-right">:</td>
										<td> <?= $isi->jumlah_pengunjung;?> Orang</td>
									</tr>
									<tr>
										<td class="container text-right">Total Harga (Rp)</td>
										<td class="container text-right">:</td>
										<td class="container text-right"> <?= $isi->total_harga;?></td>
									</tr>
									<tr>
										<td class="container text-right">Grand Total (Rp)</td>
										<td class="container text-right">:</td>
										<td class="container text-right"> <?= $isi->total_harga;?></td>
									</tr>
									<tr>
										<td class="container text-right">Nominal Bayar (Rp)</td>
										<td class="container text-right">:</td>
										<td class="container text-right"> <?= $isi->total_harga;?></td>
									</tr>
								</table><br>
								<div class="text-right">
									<a href="<?=base_url('bukti_pemesanan/tampil')?>" class="btn btn-info btn-sm text-center">Download</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	</div>
</section>

<!-- Modal -->


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("input#jml_dewasa").blur(function() {
			var jml = $(this).val();
			var tipe = 'Dewasa';
			$.ajax({
				url: "<?php echo site_url(); ?>/user/pengunjung_user/cek_harga/" + tipe + "/" + jml,
				type: "GET",
				success: function(result) {
					$('#jml_harga_dewasa').val(result);
					var jml_tiket = (parseInt($('#jml_dewasa').val()) + parseInt($('#jml_anak').val()) + parseInt($('#jml_wna').val()));
					$('#jumlah_tiket').val(jml_tiket)
					var jml_harga_tiket = (parseInt($('#jml_harga_dewasa').val()) + parseInt($('#jml_harga_anak').val()) + parseInt($('#jml_harga_wna').val()));
					$('#total_harga').val(jml_harga_tiket)
				}
			})
		});
		$("input#jml_anak").blur(function() {
			var jml = $(this).val();
			var tipe = 'Anak';
			$.ajax({
				url: "<?php echo site_url(); ?>/user/pengunjung_user/cek_harga/" + tipe + "/" + jml,
				type: "GET",
				success: function(result) {
					$('#jml_harga_anak').val(result);
					var jml_tiket = (parseInt($('#jml_dewasa').val()) + parseInt($('#jml_anak').val()) + parseInt($('#jml_wna').val()));
					$('#jumlah_tiket').val(jml_tiket)
					var jml_harga_tiket = (parseInt($('#jml_harga_dewasa').val()) + parseInt($('#jml_harga_anak').val()) + parseInt($('#jml_harga_wna').val()));
					$('#total_harga').val(jml_harga_tiket)
				}
			})
		});
		$("input#jml_wna").blur(function() {
			var jml = $(this).val();
			var tipe = 'WNA';
			$.ajax({
				url: "<?php echo site_url(); ?>/user/pengunjung_user/cek_harga/" + tipe + "/" + jml,
				type: "GET",
				success: function(result) {
					$('#jml_harga_wna').val(result);
					var jml_tiket = (parseInt($('#jml_dewasa').val()) + parseInt($('#jml_anak').val()) + parseInt($('#jml_wna').val()));
					$('#jumlah_tiket').val(jml_tiket)
					var jml_harga_tiket = (parseInt($('#jml_harga_dewasa').val()) + parseInt($('#jml_harga_anak').val()) + parseInt($('#jml_harga_wna').val()));
					$('#total_harga').val(jml_harga_tiket)
				}
			})
		});
	});
</script>