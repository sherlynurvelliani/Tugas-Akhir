<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">

					<!-- /.card-header -->
					<div class="card-body">

						<?php

						//notifikasi error
						echo validation_errors('<div class="alert alert-warning">', '</div>');

						//form open

						echo form_open(base_url('admin/pengunjung/edit/' . $pengunjung->id_booking));
						?>
						<!-- nama pengunjung -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Nama Pengunjung</label>
							<div class="col-md-5">
								<input type="text" name="nama" class="form-control"
									   placeholder="Nama Pengunjung" value="<?php echo $pengunjung->nama ?>">

							</div>
						</div>
						<!-- no hp -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">No Hp</label>
							<div class="col-md-5">
								<input type="text" name="no_hp" class="form-control" placeholder="No hp"
									   value="<?php echo $pengunjung->no_hp ?>">
							</div>
						</div>

						<!-- tanggal pemesanan  -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Tanggal Pemesanan</label>
							<div class="col-md-5">
								<input type="date" name="tanggal" class="form-control"
									   placeholder="tanggal pemesanan"
									   value="<?php echo $pengunjung->tanggal ?>" required>
							</div>
						</div>

						<!-- kategori tiket -->
						<div class="form-group row">
							<label for="inputkt" class="col-md-2 col-form-label">Dewasa</label>
							<div class="col-md-2">
								<input type="text" id="jml_dewasa" min="0" name="jml_dewasa" class="form-control"
									   value="<?php echo $pengunjung->jml_dewasa; ?>">
							</div>
							<div class="col-md-2">
								<input readonly type="text" value="0" id="jml_harga_dewasa" name="jml_harga_dewasa"
									   class="form-control">
							</div>
						</div>

						<!-- kategori tiket -->
						<div class="form-group row">
							<label for="inputkt" class="col-md-2 col-form-label">Anak - anak</label>
							<div class="col-md-2">
								<input type="number" id="jml_anak" min="0" name="jml_anak" class="form-control"
									   value="<?php echo $pengunjung->jml_anak; ?>">
							</div>
							<div class="col-md-2">
								<input readonly type="number" value="0" id="jml_harga_anak" name="jml_harga_anak"
									   class="form-control">
							</div>
						</div>

						<!-- kategori tiket -->
						<div class="form-group row">
							<label for="inputkt" class="col-md-2 col-form-label">WNA</label>
							<div class="col-md-2">
								<input type="number" id="jml_wna" min="0" name="jml_wna" class="form-control"
									   value="<?php echo $pengunjung->jml_wna; ?>">
							</div>
							<div class="col-md-2">
								<input readonly type="number" value="0" id="jml_harga_wna" name="jml_harga_wna"
									   class="form-control ">
							</div>
						</div>

						<!-- jumlah tiket -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Jumlah Pengunjung</label>
							<div class="col-md-5">
								<input readonly type="text" name="jumlah_tiket" class="form-control"
									   placeholder="jumlah tiket" id="jumlah_tiket"
									   value="<?php echo $pengunjung->jumlah_pengunjung ?>" required>
							</div>
						</div>


						<!-- total harga  -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Total Harga</label>
							<div class="col-md-5">
								<input readonly type="text" name="total_harga" class="form-control"
									   placeholder="total harga" id="total_harga"
									   value="<?php echo $pengunjung->total_harga ?>" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label">Status Bayar </label>
							<div class="col-md-2 left">
								<input class="form-check-input" type="radio" name="status_bayar" id="exampleRadios1"
									   value="sudah"<?php echo($pengunjung->status_bayar == 'sudah' ? 'checked' : ''); ?>/>
								<label class="form-check-label" for="exampleRadios1">Sudah Bayar</label>
							</div>
							<div class="col-md-2">
								<input class="form-check-input" type="radio" name="status_bayar" id="exampleRadios3"
									   value="belum"<?php echo($pengunjung->status_bayar == 'belum' ? 'checked' : ''); ?>/>
								<label class="form-check-label" for="exampleRadios3">Belum Bayar</label>
							</div>
							<!-- <div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="exampleRadios1">Default radio</label>
							</div> -->
						</div>

						<!-- total harga  -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Catatan</label>
							<div class="col-md-5">
								<textarea name="catatan" class="form-control" id="catatan"
										  rows="3"><?= $pengunjung->catatan ?></textarea>
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
</div>
<script type="text/javascript">
	$(document).ready(function () {

		jml_dewasa = $('#jml_dewasa').val();
		if (jml_dewasa != 0) {
			var tipe = 'Dewasa';
			$.ajax({
				url: "<?php echo site_url();?>/user/pengunjung_user/cek_harga/" + tipe + "/" + jml_dewasa,
				type: "GET",
				success: function (result) {
					$('#jml_harga_dewasa').val(result);
					var jml_tiket = (parseInt($('#jml_dewasa').val()) + parseInt($('#jml_anak').val()) + parseInt($('#jml_wna').val()));
					$('#jumlah_tiket').val(jml_tiket)
					var jml_harga_tiket = (parseInt($('#jml_harga_dewasa').val()) + parseInt($('#jml_harga_anak').val()) + parseInt($('#jml_harga_wna').val()));
					$('#total_harga').val(jml_harga_tiket)
				}
			})
		}

		jml_anak = $('#jml_anak').val();
		if (jml_anak != 0) {
			var tipe = 'Anak';
			$.ajax({
				url: "<?php echo site_url();?>/user/pengunjung_user/cek_harga/" + tipe + "/" + jml_anak,
				type: "GET",
				success: function (result) {
					$('#jml_harga_anak').val(result);
					var jml_tiket = (parseInt($('#jml_dewasa').val()) + parseInt($('#jml_anak').val()) + parseInt($('#jml_wna').val()));
					$('#jumlah_tiket').val(jml_tiket)
					var jml_harga_tiket = (parseInt($('#jml_harga_dewasa').val()) + parseInt($('#jml_harga_anak').val()) + parseInt($('#jml_harga_wna').val()));
					$('#total_harga').val(jml_harga_tiket)
				}
			})
		}

		jml_wna = $('#jml_wna').val();
		if (jml_wna != 0) {
			var tipe = 'WNA';
			$.ajax({
				url: "<?php echo site_url();?>/user/pengunjung_user/cek_harga/" + tipe + "/" + jml_wna,
				type: "GET",
				success: function (result) {
					$('#jml_harga_wna').val(result);
					var jml_tiket = (parseInt($('#jml_dewasa').val()) + parseInt($('#jml_anak').val()) + parseInt($('#jml_wna').val()));
					$('#jumlah_tiket').val(jml_tiket)
					var jml_harga_tiket = (parseInt($('#jml_harga_dewasa').val()) + parseInt($('#jml_harga_anak').val()) + parseInt($('#jml_harga_wna').val()));
					$('#total_harga').val(jml_harga_tiket)
				}
			})
		}

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
