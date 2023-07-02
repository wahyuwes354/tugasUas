<aside class="main-sidebar sidebar-dark-primary  elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light"><b>Bolang</b>Magelang</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="<?= site_url('User') ?>" class="d-block">Selamat Datang, <br><?php echo ucwords($this->session->userdata('nama')) ?></a>
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
          <a href="<?php echo site_url('Wisata/data_wisata'); ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Tempat Wisata
            </p>
          </a>
        </li>
    </nav>
  </div>
</aside>