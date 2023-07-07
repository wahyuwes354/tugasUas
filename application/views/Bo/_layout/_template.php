<!DOCTYPE html>

<head>
  <?php echo @$_meta; ?>
  <title>BolangMagelang</title>
  <link rel="icon" href="<?= base_url(); ?>assets/img/logo_pilkades_kab.png" type="image/x-icon">
  <?php echo @$_css; ?>

  <script src="<?php echo base_url(); ?>assets/JQuery/jquery-3.6.0.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <?php echo @$_navbar; ?>

    <!-- Main Sidebar Container -->
    <?php echo @$_sidebar; ?>
    <!-- Content Wrapper. Contains page content -->
    <?php echo @$_content; ?>

    <?php echo @$_footer; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php echo @$_js; ?>
</body>

</html>