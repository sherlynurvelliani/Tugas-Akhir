Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url('') ?>assets/assets/img/lotus_50px.png" rel="icon" >
    <span class="brand-text font-weight-light">WISATA NARMADA</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() ?>assets/admin/dist/img/male_user_30px.png" rel="icon">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $this->session->userdata('username'); ?></a>
      </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="<?php echo base_url('admin/dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Halaman Utama
              </p>
            </a>
          </li>

          <!-- Data tiket -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>
                Tiket
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <!-- subclass data tiket -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/tiket') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Tiket</p>
                </a>
              </li>
 
              <li class="nav-item">
                <a href="<?php echo base_url('admin/tiket/tambah') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data Tiket</p>
                </a>
              </li>
            </ul>
          </li>

          <!--  Data Penggunjung -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users nav-icon"></i>
              <p>
                Data Pengunjung
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/Pengunjung') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Data Pengunjung</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/Pengunjung/tambah')?>"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data Pengunjung</p>
                </a>
              </li>
            </ul>
          </li>

          <!--  Informasi -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Berita
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/Informasi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/Informasi/Tambah') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Berita</p>
                </a>
              </li>
            </ul>
          </li>

          <!--  Laporan -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Laporan_pengunjung') ?>" class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>Laporan Data Pengunjung</p>
                </a>
              </li> 
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/Claporan') ?>" class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>Laporan Data Filter</p>
                </a>
              </li> 
            </ul>
          </li>

          <!--   Logout -->
          <li class="nav-item">
            <a href="<?php echo base_url('login/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout

              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
