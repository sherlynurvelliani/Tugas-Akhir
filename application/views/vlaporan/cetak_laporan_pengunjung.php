<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Cetak Laporan</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo base_url('') ?>assets/assets/img/lotus_50px.png" rel="icon">
	<link href="<?php echo base_url('') ?>assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="<?php echo base_url('') ?>https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
		  rel="stylesheet">

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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--  -->
</head>
<body onload="window.print()">
<section id="pricing" class="section-bg">
	<div class="container">
		<div class="section-header">
			<h3 class="section-title"><?php echo $title ?></h3>
			<h3 class="section-title"><?php echo $subtitle ?></h3>
		</div>
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body ">
								<table class="table table-bordered table-striped table-hover table-sm" border="1">
									<thead class="text-center">
									<tr>
										<td>NO</td>
										<td>ID Booking</td>
										<td>Tanggal</td>
										<td>Nama</td>
										<td>No Telepon</td>
										<td>Total Pengunjung</td>
										<td>Total Harga</td>
									</tr>
									</thead>
									<tbody class="text-center">
									<?php
									$no = 1;
									$jumlah_pengunjung = 0;
									$total = 0;
									foreach ($datafilter as $row):
										$jumlah_pengunjung += $row->jumlah_pengunjung;
										$total += $row->total_harga;
										?>

										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $row->id_booking; ?></td>
											<td><?php echo $row->tanggal; ?></td>
											<td><?php echo $row->nama; ?></td>
											<td><?php echo $row->no_hp; ?></td>
											<td><?php echo $row->jumlah_pengunjung; ?></td>
											<td>Rp. <?php echo number_format($row->total_harga); ?></td>
											<!-- <td><?php echo $row->status_bayar; ?></td> -->
										</tr>
									<?php endforeach ?>
									</tbody>
								</table>
								<table>
									<tr>
										<td class="continer text-left">Jumlah Pengunjung</td>
										<td>:</td>
										<td> <?= $jumlah_pengunjung; ?> Orang</td>
									</tr>
									<tr>
										<td class="continer text-left">Total Pendapatan</td>
										<td>:</td>
										<th>
											Rp. <?= number_format($total); ?>
										</th>
									</tr>
								</table>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	</div>
</section>
</body>
