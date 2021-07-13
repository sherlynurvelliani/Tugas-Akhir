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
                  <th>Id Berita</th>
                  <th>Judul Berita</th>
                  <th>Gambar</th>
                  <th>Keterangan</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($informasi as $informasi){ ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $informasi->id_informasi ?></td>
                    <td><?php echo $informasi->judul ?></td>
                    <td><?php echo $informasi->gambar ?></td>
                    <td><?php echo $informasi->ket ?></td>
                    <td><?php echo $informasi->tanggal ?></td>
                    
                    <td>
                      <a href="<?php echo base_url('admin/informasi/edit/'.$informasi->id_informasi) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

                      <a href="<?php echo base_url('admin/informasi/delete/'.$informasi->id_informasi) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-ban"></i></a>


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