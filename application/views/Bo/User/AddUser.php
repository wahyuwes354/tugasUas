<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            <?= $this->session->flashdata('msg'); ?>
        </div>
        <div class="card">
            <form method="POST" action="<?= site_url('User/simpanUser') ?>" id="frm_calon" enctype="multipart/form-data">
                <div class="modal-body">
                    <input hidden type="text" id="id_user" name="id_user">
                    <div class="form-group">
                        <label for="">Role User</label>
                        <select name="role" id="role" class="form-control">
                            <?php foreach ($role as $rl) { ?>
                                <option value="<?= $rl->id_role ?>"><?= $rl->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" name="nm_lengkap" id="nm_lengkap" class="form-control" placeholder="Nama User">
                    </div>
                    <div class="form-group">
                        <label for="">Email User</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="pass" id="pass" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="">Retype Password</label>
                        <input type="text" name="repass" id="repass" class="form-control" placeholder="Retype Password">
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