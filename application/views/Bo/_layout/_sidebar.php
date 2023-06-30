<aside class="main-sidebar sidebar-dark-primary  elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light"><i class="nav-icon fas fa-home"></i> <b>TPS <?php echo $this->session->userdata('no_tps') ?></b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="<?php echo base_url(); ?>assets/bo/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        <img src="<?php echo base_url(); ?>assets/img/logo_kab.png" alt="Logo Kab">

      </div>
      <div class="info">
        <!-- <label> Selamat Datang, </label> -->
        <span>Selamat Datang</span>
        <a href="#" class="d-block"><?php echo $this->session->userdata('nama') ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo site_url('dashboard'); ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <?php if ($this->session->userdata('role') == '1') { ?>
          <li class="nav-header">KONFIGURASI</li>
          <li class="nav-item">
            <a href="<?php echo site_url('User/Data_pengguna'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a href="<?php echo site_url('Pemilih/pemilihtps'); ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Tempat Wisata
            </p>
          </a>
        </li>
    </nav>
  </div>
</aside>