 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #f88f01">
          <div class="inner">
            <h3><?= $this->db->count_all('tabel_tiket'); ?></h3>
            <p>Tiket</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-ticket-alt"></i>
          </div>
          <a href="<?=base_url('admin/Tiket/');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #e27802">
          <div class="inner">
            <h3><?= $this->db->count_all('tabel_pengunjung'); ?><sup style="font-size: 20px"></sup></h3>
            <p>Pengunjung</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-users nav-icon"></i>
          </div>
          <a href="<?=base_url('admin/Pengunjung/');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- ./col -->
      
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #c70039">
          <div class="inner">
            <h3><?= $this->db->count_all('tabel_informasi'); ?><sup style="font-size: 20px"></sup></h3>
            <p>Berita</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-book-open"></i>
          </div>
          <a href="<?=base_url('admin/Informasi/');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color: #9f5f80">
          <div class="inner">
            <h3>6</h3>
            <p>Laporan Data Pengunjung</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-list-alt"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>