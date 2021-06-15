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
						echo form_open(base_url('admin/tiket/edit/'.$tiket->id_tiket));
						?>

						

						<!-- id tiket -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Id Tiket</label>
							<div class="col-md-5">
								<input type="text" name="id_tiket" class="form-control" placeholder="id tiket" value="<?php echo $tiket->id_tiket ?> " readonly>
							</div>
						</div>

						<!-- kategori tiket -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Jenis Tiket</label>
							<div class="col-md-5">
								<input type="text" name="kategori" class="form-control" placeholder="kategori tiket" value="<?php echo $tiket->kategori?>" required>
							</div>
						</div>

						<!-- harga -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Harga</label>
							<div class="col-md-5">
								<input type="number" name="harga" class="form-control" placeholder="harga" value="<?php echo $tiket->harga?>" required>
							</div>
						</div>

						


						<div class="form-group row">
							<label class="col-md-2 col-form-label"></label>
							<div class="col-md-5">
								<button class="btn btn-success btn-lg" name="submit" type="submit">
									<i class="fa fa-save"></i>Simpan
								</button>

								<button class="btn btn-info btn-lg" name="reset" type="reset">
									<i class="fa fa-times"></i>Reset
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