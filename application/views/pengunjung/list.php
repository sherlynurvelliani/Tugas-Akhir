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
                  <!-- <th>Id Booking</th> -->
                  <th>Nama Pengunjung</th>
                  <th>No Hp</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Kategori Tiket</th>
                  <th>Jumlah Tiket</th>
                  <th>Total Harga</th>
                  <th>Status Bayar</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($pengunjung as $pengunjung){ ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <!-- <td><?php echo $pengunjung->id_booking ?></td> -->
                    <td><?php echo $pengunjung->nama ?></td>
                    <td><?php echo $pengunjung->no_hp ?></td>
                    <td><?php echo $pengunjung->tanggal ?></td>
                    <td>
                      <?php echo 'Anak : ' . $pengunjung->jml_anak ?> <br>
                      <?php echo 'Dewasa : ' . $pengunjung->jml_dewasa ?> <br>
                      <?php echo 'WNA : ' . $pengunjung->jml_wna ?> <br>
                    </td>
                    <td><?php echo $pengunjung->jumlah_pengunjung ?></td>
                    <td><?php echo 'Rp ' . number_format($pengunjung->total_harga) ?></td>
                    <td><?php echo ucfirst($pengunjung->status_bayar) ?></td>
                    
                    <td>
                      <a href="<?php echo base_url('admin/pengunjung/Edit/'.$pengunjung->id_booking) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

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