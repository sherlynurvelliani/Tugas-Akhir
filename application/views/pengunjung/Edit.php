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
						
						echo form_open(base_url('admin/pengunjung/edit/'.$pengunjung->id_booking));
						?>
						<!-- id booking -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Id Booking</label>
							<div class="col-md-5">
								<input type="text" name="id_booking" class="form-control" placeholder="id booking" value="<?php echo $pengunjung->id_booking ?> " required>
							</div>
						</div>

						<!-- nama pengunjung -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Nama Lengkap</label>
							<div class="col-md-5">
								<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pengunjung->nama ?> " required>
							</div>
						</div>

						<!-- no hp -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">No Hp</label>
							<div class="col-md-5">
								<input type="text" name="no_hp" class="form-control" placeholder="No Hp" value="<?php echo $pengunjung->no_hp ?> " required>
							</div>
						</div>

						<!-- tanggal -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Tanggal Pemesanan</label>
							<div class="col-md-5">
								<input type="date" name="tanggal" class="form-control" placeholder="tanggal" value="<?php echo $pengunjung->tanggal?> " required>
							</div>
						</div>


						<!-- kategori -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Kategori Tiket</label>
							<div class="col-md-5">
								<input type="text" name="kategori" class="form-control" placeholder="kategori" value="<?php echo $pengunjung->kategori?> " required>
							</div>
						</div>

						<!-- jumlah -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Jumlah Tiket</label>
							<div class="col-md-5">
								<input type="text" name="jumlah" class="form-control" placeholder="jumlah" value="<?php echo $pengunjung->jumlah?> " required>
							</div>
						</div>

						<!-- total harga -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Total Harga</label>
							<div class="col-md-5">
								<input type="text" name="harga" class="form-control" placeholder="harga" value="<?php echo $pengunjung->harga?> " required>
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