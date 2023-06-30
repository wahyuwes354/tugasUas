<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <!-- <button class="btn btn-success" onclick="tambah_calon()"><i class="fa fa-user"></i> Tambah Calon</button> -->
                <!-- <button class="btn btn-success" onclick="tambah_calon()"><i class="fa fa-user"></i> Tambah Calon</button> -->
                <a class="btn btn-success" href="<?= site_url('User/AddUser'); ?>"><i class="fa fa-user"></i> Tambah Pengguna</a>
            </div>
            <div class="card-body">
                <table id="Calon" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width:5%;">#</th>
                            <th style="width:10%;"></th>
                            <th style="width:10%;">Nama</th>
                            <th style="width:50%;">Email</th>
                            <th style="width:25%;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <span><b>Panduan Registrasi Bilik</b></span>
            </div>
            <div class="card-body">
                <ol>
                    <li> Tombol <a class="btn-success btn-sm"> Tambah Bilik</a> , untuk melakukan penambahan bilik coblos </li>
                    <li> Tombol <a class="btn-warning btn-sm"> edit </a>, untuk merubah pengaturan bilik</li>
                    <li> Tombol <a class="btn-danger btn-sm"> Hapus </a>, untuk Menghapus pengaturan bilik</li>
                    <li> Tombol <a class="btn-default btn-sm"> Export Config </a> akan aktif setelah Pengaturan TPS diKunci <a class="btn-danger btn-sm"> Kunci </a>, untuk mengunduh data bilik yang akan diimport ke bilik pemilihan</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- <div class="modal" id="modal_calon" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Calon Kepala Desa</h4>
            </div>
            <form method="POST" action="" id="frm_calon" enctype="multipart/form-data">
                <div class="modal-body">
                    <input hidden type="text" id="id_calon" name="id_calon">
                    <div class="form-group">
                        <label for="">Kategori Wisata</label>
                        <select name="" id="">
                            <option value="">Wisata Alam</option>
                            <option value="">Wisata Kuliner</option>
                            <option value="">Wisata Religi</option>
                            <option value="">Wisata Budaya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Tempat Wisata</label>
                        <input type="number" name="nourut" id="nourut" class="form-control" placeholder="Nomor Calon">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Urut Calon</label>
                        <input type="number" name="nourut" id="nourut" class="form-control" placeholder="Nomor Calon">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Calon</label>
                        <input type="text" name="nmcalon" id="nmcalon" class="form-control" placeholder="Nama Calon">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" onclick="simpan()">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div> -->

<script type="text/javascript">
    let save_method;

    $(document).ready(function() {
        tblCalon = $('#Calon').DataTable({
            "ajax": "<?php echo site_url('Calon/ajax_list') ?>",
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "responsive": true
        });
    });

    function delete_calon(id) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Yakin Akan Menghapus Akun Ini ?',
            text: "Akun Yang di hapus tidak bisa di kembalikan lagi!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: 'Tidak, Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo site_url('calon/delete') ?>/" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        tblCalon.ajax.reload(null, false);
                        swalWithBootstrapButtons.fire({
                            icon: 'success',
                            title: 'Akun Telah berhasil di hapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    icon: 'error',
                    title: 'Akun batal di hapus',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })
    }

    function edit_calon(id) {
        save_method = 'update';
        $('#frm_calon')[0].reset(); // reset form on modals
        // $('.form-group').removeClass('has-error'); // clear error class
        // $('.help-block').empty(); // clear error string
        // $('#nourut').attr('readonly',true); //set input disable
        // $('#nmcalon').attr('hidden',true); //set input disable

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('calon/get_id') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                // console.log(data);
                $('[name="id_calon"]').val(data.id);
                $('[name="nourut"]').val(data.nourut);
                $('[name="nmcalon"]').val(data.nama);

                $('#modal_calon').modal('show');
                $('.modal-title').text('Edit Calon Kepala Desa');
            },
            error: function() {
                alert('Gagal Memanggil Data!!');
            }
        });
    }

    function tambah_calon() {
        save_method = 'add';
        // $('#frm_calon')[0].reset();
        // $('#modal_calon')[0].reset(); // reset form on modals
        // $('.form-group').removeClass('has-error'); // clear error class
        // $('.help-block').empty(); // clear error string
        $('#modal_calon').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Calon'); // Set Title to Bootstrap modal title
    }

    function simpan() {
        // $('#btnSave').text('saving...'); //change button text
        // $('#btnSave').attr('disabled',true); //set button disable
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('calon/add') ?>";
        } else {
            url = "<?php echo site_url('calon/update') ?>";
        }

        var formData = new FormData($('#frm_calon')[0]);
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                console.log(data);

                // if(data==true){
                $('#modal_calon').modal('hide');
                tblCalon.ajax.reload(null, false);
                // }
                // else
                // {
                //  swal('calon sudah ada');
                // }
                // $('#btnSave').text('save'); //change button text
                // $('#btnSave').attr('disabled',false); //set button enable


            },
            error: function() {
                swal('error');
                // $('#btnSave').text('save'); //change button text
                // $('#btnSave').attr('disabled',false); //set button enable

            }
        });
    }
</script>