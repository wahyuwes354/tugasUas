<!-- Google Font: Source Sans Pro -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/dist/css/adminlte.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/fontawesome-free/css/all.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/open-iconic/font/css/open-iconic-bootstrap.css">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- SweetAlert -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/sweetalert/dist/sweetalert.css">
<!-- Toastr -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/toastr/toastr.min.css">
<!-- daterange picker -->
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/daterangepicker/daterangepicker.css"> -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bo/plugins/datetimepicker/bootstrap-datepicker.min.css">

<style type="text/css">
    th,
    td {
        white-space: nowrap;
    }

    div.dataTables_wrapper {
        /* width: 800px; */
        margin: 0 auto;
    }

    tr {
        height: 10px;
    }


    /* CSS for Loading Animation */
    /* Start by setting display:none to make this hidden.
   Then we position it in relation to the viewport window
   with position:fixed. Width, height, top and left speak
   for themselves. Background we set to 80% white with
   our animation centered, and no-repeating */
    .proses {
        display: none;
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(255, 255, 255, .8) url('http://i.stack.imgur.com/FhHRx.gif') 50% 50% no-repeat;
    }

    /* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
    body.loading .proses {
        overflow: hidden;
    }

    /* Anytime the body has the loading class, our
   modal element will be visible */
    body.loading .proses {
        display: block;
    }

    .numberCircleSmall {
        border-radius: 30%;
        behavior: url(PIE.htc);
        /* remove if you don't care about IE8 */
        width: 28px;
        height: 28px;
        padding: 2px;
        background: #fff;
        border: 2px solid #666;
        color: #000;
        text-align: center;
        font-family: 'Righteous', cursive;
        margin: 0 auto;
    }
</style>