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
                 
                  <th>Id Tiket</th>
                  <th>Kategori Tiket</th>
                  <th>Harga Tiket</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($tiket as $tiket){ ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $tiket->id_tiket ?></td>
                    <td><?php echo $tiket->kategori ?></td>
                    <td><?php echo 'Rp ' . number_format ($tiket->harga) ?></td>
                    
                    <td>
                      <a href="<?php echo base_url('admin/tiket/edit/'.$tiket->id_tiket) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

                      <a href="<?php echo base_url('admin/tiket/delete/'.$tiket->id_tiket)?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-ban"></i></a>


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