<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan</title>

	<!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/fonts.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/datatables/buttons/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/datatables/responsive/css/responsive.bootstrap4.min.css" rel="stylesheet">

    <style>
    	.line-title {
    		border: 0;
    		border-style: inset;
    		border-top: 1px solid #000;
    	}
    </style>
</head>
<body onload="window.print()">
    <table style="width: 100%;">
    	<tr>
    		<td align="center">
    			<span style="line-height: 1.6; font-weight: bold;"><?php echo $title ?></span><br>
    			<span style="line-height: 1.6; font-weight: bold;"><?php echo $subtitle ?></span>
    		</td>
    	</tr>
    </table>
    <hr class="line-title">
    <p align="center">
    	Data Transaksi Barang Masuk
    </p>
    <div class="container">
        <table class="table table-bordered table-striped table-hover table-sm">
            <thead>
                <tr>
                    <td>No</td>
    				<td>Tanggal</td>
    				<td>ID Transaksi</td>
    				<td>ID Barang</td>
    				<td>ID User</td>
    				<td>Jumlah</td>
                </tr>
            </thead>
            <tbody>
                <tr>
    				<?php $no = 1; foreach ($datafilter as $row): ?>
    				<td><?php echo $no++; ?></td>
    				<td><?php echo $row->tanggal_masuk; ?></td>
    				<td><?php echo $row->id_barang_masuk; ?></td>
    				<td><?php echo $row->barang_id; ?></td>
    				<td><?php echo $row->user_id; ?></td>
    				<td><?php echo $row->jumlah_masuk; ?></td>
    			</tr>
    				<?php endforeach ?>
    		</tbody>
    	</table>
	</div>

	<!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>
</html>