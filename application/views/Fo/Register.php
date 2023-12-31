<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bo/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bo/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bo/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">

    <?= $this->session->flashdata('msg'); ?>

    <div class="register-box">
        <div class="register-logo">
            <a href="<?= base_url() ?>assets/bo/index2.html"><b>Bolang</b>Magelang</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Silakan isikan data anda</p>

                <form id="formRegister" action="<?= site_url('Auth/addRegister') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nm_lengkap" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="repass" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block ">Register</button>
                        </div>
                    </div>
                </form>
                <span>Sudah Punya akun ? silakan </span><a href="<?= site_url('Home/Login'); ?>" class="text-center">Login</a>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/bo/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/bo/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jquery-validation -->
    <script src="<?= base_url() ?>assets/bo/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>assets/bo/plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- SweetAlert2
    <script src="<?= base_url() ?>assets/bo/plugins/sweetalert2/sweetalert2.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/bo/dist/js/adminlte.min.js"></script>
    <!-- <script>
        $(document).ready(function() {
            $('#formRegister').validate({
                rules: {
                    nm_lengkap: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    pass: {
                        required: true,
                        minlength: 5
                    },
                    repass: {
                        equalto: '#pass'
                    },
                },
                messages: {
                    nm_lengkap: {
                        required: "Silakan Masukkan Nama Lengkap",
                    },
                    email: {
                        required: "Silakan Masukkan Email",
                        email: "Silakan Masukkan Email yang valid"
                    },
                    pass: {
                        required: "Silakan Ketikkan Password anda",
                        minlength: "Password harus lebih dari 5 karakter"
                    },
                    repass: {
                        equalto: "Password tidak sama"
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.input-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script> -->
</body>