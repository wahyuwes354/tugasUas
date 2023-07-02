<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-success" href="<?= site_url('User/AddUser'); ?>"><i class="fa fa-user"></i> Tambah Pengguna</a>
            </div>
            <div class="card-body">
                <table id="tblUser" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width:5%;">#</th>
                            <th style="width:10%;"></th>
                            <th style="width:10%;">Nama</th>
                            <th style="width:45%;">Email</th>
                            <th style="width:15%;">Role</th>
                            <th style="width:15%;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $item) : ?>
                            <tr>
                                <td><?= ++$start ?></td>
                                <td>
                                    <!-- <a href="<?= site_url('User/UpdateUser/' . $item->id_user) ?>" class=" btn-warning btn-sm"><i class="fa fa-key"></i> Reset</a> -->
                                    <button onclick=delete_user(<?= $item->id_user; ?>) class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                                    <a href="<?= site_url('User/UpdateUser/' . $item->id_user) ?>" class=" btn-primary btn-sm"><i class="fa fa-pencil"></i> Ubah</a>
                                </td>
                                <td><?php echo $item->nama; ?></td>
                                <td><?php echo $item->email; ?></td>
                                <td><?php echo $item->id_role; ?></td>
                                <td><?php echo $item->status; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
            <div class="card-body">
                <?php echo $pagination; ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function delete_user(id) {
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
                    url: "<?php echo site_url('User/delete') ?>/" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        console.log(data);
                        swalWithBootstrapButtons.fire({
                            icon: 'success',
                            title: 'Akun Telah berhasil di hapus',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        location.reload();
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
            url: "<?php echo site_url('User/get_id') ?>/" + id,
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