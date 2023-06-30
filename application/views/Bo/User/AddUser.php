<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form method="POST" action="" id="frm_calon" enctype="multipart/form-data">
                <div class="modal-body">
                    <input hidden type="text" id="id_user" name="id_user">
                    <div class="form-group">
                        <label for="">Role User</label>
                        <select name="" id="" class="form-control">
                            <option value="">Admin</option>
                            <option value="">Pengguna</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" name="nourut" id="nourut" class="form-control" placeholder="Nama User">
                    </div>
                    <div class="form-group">
                        <label for="">Email User</label>
                        <input type="text" name="Email" id="Email" class="form-control" placeholder="Email">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="Password" id="Password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="">Retype Password</label>
                        <input type="text" name="RePassword" id="RePassword" class="form-control" placeholder="Retype Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?= site_url('User/Data_pengguna'); ?>" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-success" onclick="simpan()">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>