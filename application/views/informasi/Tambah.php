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
						echo form_open(base_url('admin/informasi/tambah'),' class="form-horizontal"');
						?>
					

						<!-- id informasi -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Id Informasi</label>
							<div class="col-md-5">
								<input type="text" name="id_informasi" class="form-control" placeholder="id informasi" value="<?php echo set_value('id_informasi')?>" required>
							</div>
						</div>

						<!-- judul informasi -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Judul Informasi</label>
							<div class="col-md-5">
								<input type="text" name="judul" class="form-control" placeholder="judul informasi" value="<?php echo set_value('judul')?>" required>
							</div>
						</div>

						<!-- gambar -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Gambar</label>
							<div class="col-md-5">
								<input type="text" name="gambar" class="form-control" placeholder="gambar" value="<?php echo set_value('gambar')?>" required>
							</div>
						</div>

						<!-- keterangan -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Keterangan</label>
							<div class="col-md-5">
								<input type="text" name="ket" class="form-control" placeholder="keterangan" value="<?php echo set_value('ket')?>" required>
							</div>
						</div>

						<!-- tanggal -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Tanggal</label>
							<div class="col-md-5">
								<input type="date" name="tanggal" class="form-control" placeholder="tanggal" value="<?php echo set_value('tanggal')?>" required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-2 col-form-label"></label>
							<div class="col-md-5">
								<button class="btn btn-success btn-lg" name="submit" type="submit">
									<i class="fa fa-save"></i> Simpan
								</button>

								<button class="btn btn-info btn-lg" name="reset" type="reset">
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