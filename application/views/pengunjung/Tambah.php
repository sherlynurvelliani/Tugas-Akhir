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
						echo form_open(base_url('admin/pengunjung/proses_tambah'),'class="form-horizontal"');
						?>
						
						<!-- nama pengunjung -->
								<div class="form-group row">
									<label class="col-md-2 col-form-label">Nama Pengunjung</label>
									<div class="col-md-5">
										<input type="text" name="nama" class="form-control"
										placeholder="Nama Pengunjung" value="<?php echo set_value('nama')?>" required>
									</div>
								</div>

								<!-- no hp -->
								<div class="form-group row">
									<label class="col-md-2 col-form-label">No Hp</label>
									<div class="col-md-5">
										<input type="text" name="no_hp" class="form-control" placeholder="No hp"
											   value="<?php echo set_value('no_hp')?>"required>
									</div>
								</div>

								<!-- tanggal pemesanan  -->
								<div class="form-group row">
									<label class="col-md-2 col-form-label">Tanggal Pemesanan</label>
									<div class="col-md-5">
										<input type="date" name="tanggal" class="form-control"
											   placeholder="tanggal pemesanan"
											   value="<?php echo set_value('tanggal')?>" required>
									</div>
								</div>

								<!-- kategori tiket -->
								<div class="form-group row">
									<label for="inputkt" class="col-md-2 col-form-label">Dewasa</label>
									<div class="col-md-2">
										<input type="number" value="0" id="jml_dewasa" name="jml_dewasa" class="form-control">
									</div>
									<div class="col-md-2">
										<input readonly type="text" value="0" id="jml_harga_dewasa" name="jml_harga_dewasa" class="form-control">
									</div>
								</div>

								<!-- kategori tiket -->
								<div class="form-group row">
									<label for="inputkt" class="col-md-2 col-form-label">Anak - anak</label>
									<div class="col-md-2">
										<input type="number" value="0" id="jml_anak" name="jml_anak" class="form-control">
									</div>
									<div class="col-md-2">
										<input readonly type="number" value="0" id="jml_harga_anak" name="jml_harga_anak" class="form-control">
									</div>
								</div>

								<!-- kategori tiket -->
								<div class="form-group row">
									<label for="inputkt" class="col-md-2 col-form-label">WNA</label>
									<div class="col-md-2">
										<input type="number" value="0" id="jml_wna" name="jml_wna" class="form-control">
									</div>
									<div class="col-md-2">
										<input readonly type="number" value="0" id="jml_harga_wna" name="jml_harga_wna" class="form-control">
									</div>
								</div>

								<!-- jumlah tiket -->
								<div class="form-group row">
									<label class="col-md-2 col-form-label">Jumlah Tiket</label>
									<div class="col-md-5">
										<input readonly type="text" name="jumlah_tiket" class="form-control"
											   placeholder="jumlah tiket" id="jumlah_tiket"
											   value="<?php echo set_value('jumlah_tiket') ?>" required>
									</div>
								</div>


								<!-- total harga  -->
								<div class="form-group row">
									<label class="col-md-2 col-form-label">Total Harga</label>
									<div class="col-md-5">
										<input readonly type="text" name="total_harga" class="form-control"
											   placeholder="total harga" id="total_harga"
											   value="<?php echo set_value('total_harga')?>" required>
									</div>
								</div>

								<!-- total harga  -->
								<div class="form-group row">
									<label class="col-md-2 col-form-label">Catatan</label>
									<div class="col-md-5">
										<textarea name="catatan" class="form-control" id="catatan" rows="3"></textarea>
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
		