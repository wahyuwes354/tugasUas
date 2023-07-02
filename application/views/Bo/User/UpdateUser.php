<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            <?= $this->session->flashdata('msg'); ?>
        </div>
        <div class="card">
            <form method="POST" action="<?= site_url('User/doUpdate?id_user=') . $user->id_user ?>" id="frm_user" enctype="multipart/form-data">
                <div class="modal-body">
                    <input hidden type="text" id="id_user" name="id_user">
                    <div class="form-group">
                        <label for="">Role User</label>
                        <select name="role" id="role" class="form-control">
                            <?php foreach ($role as $rl) { ?>
                                <option value="<?= $rl->id_role ?>" <?= ($rl->id_role == $user->id_role) ? "selected" : "" ?>><?= $rl->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" name="nm_lengkap" id="nm_lengkap" class="form-control" placeholder="Nama User" value="<?= $user->nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email User</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?= $user->email ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Status User</label>
                        <select name="status" id="status" class="form-control">
                            <?php foreach ($status_pengguna as $sp) { ?>
                                <option value="<?= $sp->id_status ?>" <?= ($sp->id_status == $user->id_status) ? "selected" : "" ?>><?= $sp->status ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?= site_url('User/Data_pengguna'); ?>" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>