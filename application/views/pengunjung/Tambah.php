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
						
						<!-- id booking -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Id Booking</label>
							<div class="col-md-5">
								<input type="text" name="id_booking" class="form-control" placeholder="id booking" value="<?php echo set_value('id_booking')?>">
							</div>
						</div>

						<!-- nama pengunjung -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Nama Pengunjung</label>
							<div class="col-md-5">
								<input type="text" name="nama" class="form-control" placeholder="Nama Pengunjung" value="<?php echo set_value('nama')?>" >
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
							<label class="col-md-2 col-form-label">Kategori Tiket</label>
							<div class="col-md-5">
								<input type="text" name="kategori" class="form-control" placeholder="kategori tiket" value="<?php echo set_value('kategori')?>" required>
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

						<!-- nama wisata  -->
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Nama Wisata</label>
							<div class="col-md-5">
								<input type="text" name="nama_wisata" class="form-control" placeholder="nama wisata" value="<?php echo set_value('nama_wisata')?>" required>
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