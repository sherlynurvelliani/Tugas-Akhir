 <!-- /.content-wrapper -->
 <footer class="main-footer">
 	<div class="float-right d-none d-sm-inline-block">
 		
 	</div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
 	<!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>assets/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/admin/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
	$(function () {
		$("#example1").DataTable({
			"responsive": true, "lengthChange": false, "autoWidth": false
			
		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function () {
		$("input#jml_dewasa").blur(function () {
			var jml = $(this).val();
			var tipe = 'Dewasa';
			$.ajax({
				url: "<?php echo site_url();?>/user/pengunjung_user/cek_harga/" + tipe + "/" + jml,
				type: "GET",
				success: function (result) {
					$('#jml_harga_dewasa').val(result);
					var jml_tiket = (parseInt($('#jml_dewasa').val()) + parseInt($('#jml_anak').val()) + parseInt($('#jml_wna').val()));
					$('#jumlah_tiket').val(jml_tiket)
					var jml_harga_tiket = (parseInt($('#jml_harga_dewasa').val()) + parseInt($('#jml_harga_anak').val()) + parseInt($('#jml_harga_wna').val()));
					$('#total_harga').val(jml_harga_tiket)
				}
			})
		});
		$("input#jml_anak").blur(function () {
			var jml = $(this).val();
			var tipe = 'Anak';
			$.ajax({
				url: "<?php echo site_url();?>/user/pengunjung_user/cek_harga/" + tipe + "/" + jml,
				type: "GET",
				success: function (result) {
					$('#jml_harga_anak').val(result);
					var jml_tiket = (parseInt($('#jml_dewasa').val()) + parseInt($('#jml_anak').val()) + parseInt($('#jml_wna').val()));
					$('#jumlah_tiket').val(jml_tiket)
					var jml_harga_tiket = (parseInt($('#jml_harga_dewasa').val()) + parseInt($('#jml_harga_anak').val()) + parseInt($('#jml_harga_wna').val()));
					$('#total_harga').val(jml_harga_tiket)
				}
			})
		});
		$("input#jml_wna").blur(function () {
			var jml = $(this).val();
			var tipe = 'WNA';
			$.ajax({
				url: "<?php echo site_url();?>/user/pengunjung_user/cek_harga/" + tipe + "/" + jml,
				type: "GET",
				success: function (result) {
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
</body>
</html>
