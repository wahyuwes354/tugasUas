<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    </div>
    <div class="col-md-12">
        <!-- <?php echo '<pre>';
                print_r($data);
                print_r($start);
                echo '</pre>'; ?> -->


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
                                    <a href="javascript:void(0)" onclick=delete_user(<?= $item->id_user; ?>) class="btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                    <a href="<?= site_url('User/UpdateUser/' . $item->id_user); ?>" class=" btn-primary btn-sm"><i class="fa fa-edit"></i> Ubah</a>
                                </td>
                                <td><?php echo $item->nama; ?></td>
                                <td><?php echo $item->email; ?></td>
                                <td><?php echo $item->name; ?></td>
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
            title: 'Yakin Akan Menghapus ?',
            text: "Data Akan di Hapus Secara Permanen!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
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
                            title: 'Data berhasil di hapus',
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
                    title: 'Penghapusan di Batalkan',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })
    }
</script>