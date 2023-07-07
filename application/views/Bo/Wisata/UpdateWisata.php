<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            <?= $this->session->flashdata('msg'); ?>
        </div>
        <div class="card">
            <form method="POST" action="<?= site_url('Wisata/doUpdate?id_wisata=') . $Wisata->id_wisata ?>" id="frm_Wisata" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Role Wisata</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <?php foreach ($kategori as $ktg) { ?>
                                <option value="<?= $ktg->id_kategori ?>" <?= ($ktg->id_kategori == $Wisata->id_kategori) ? "selected" : "" ?>><?= $ktg->kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Wisata</label>
                        <input type="text" name="nm_wisata" id="nm_wisata" class="form-control" placeholder="Nama Wisata" value="<?= $Wisata->nm_wisata ?>">
                    </div>
                    <div class="form-group">
                        <label for="">lokasi Wisata</label>
                        <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Lokasi Wisata" value="<?= $Wisata->lokasi ?>">
                    </div>
                    <div class="form-group">
                        <label for="">deskripsi Wisata</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="deskripsi Wisata" value="<?= $Wisata->deskripsi ?>">
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="<?= site_url('Wisata/data_wisata'); ?>" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>