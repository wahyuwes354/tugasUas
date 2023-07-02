<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"></i>
        <!-- <span class="badge badge-danger navbar-badge">3</span> -->
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                <?php echo strtoupper($this->session->userdata('username')); ?>
              </h3>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="d-flex justify-content-between">
          <div>
            <a href="<?= site_url('User'); ?>" class="dropdown-item dropdown-footer">Akun</a>
          </div>
          <div>
            <a href="<?php echo site_url('Auth/logout'); ?>" class="dropdown-item dropdown-footer">Logout</a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->