<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">

          <!-- /.card-header -->
          <div class="card-body">

            <?php 

//notifikasi
            if ($this->session->flashdata('sukses')) {
              echo '<p class="alert alert-success">';
              echo $this->session->flashdata('sukses');
              echo '</div>';
            }
            ?> 

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id Booking</th>
                  <th>Nama Pengunjung</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Kategori Tiket</th>
                  <th>Jumlah Tiket</th>
                  <th>Total Harga</th>
                  <th>Nama Wisata</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($pengunjung as $pengunjung){ ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $pengunjung->id_booking ?></td>
                    <td><?php echo $pengunjung->nama ?></td>
                    <td><?php echo $pengunjung->tanggal ?></td>
                    <td><?php echo $pengunjung->kategori ?></td>
                    <td><?php echo $pengunjung->jumlah ?></td>
                    <td><?php echo $pengunjung->harga ?></td>
                    <td><?php echo $pengunjung->nama_wisata ?></td>
                    
                    <td>
                      <a href="<?php echo base_url('admin/pengunjung/edit/'.$pengunjung->id_booking) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

                      <a href="<?php echo base_url('admin/pengunjung/delete/'.$pengunjung->id_booking) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-ban"></i></a>


                    </td>
                  </tr>
                  <?php $no++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>