<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            <?= $this->session->flashdata('msg'); ?>
        </div>
        <div class="card">
            <form method="POST" action="<?= site_url('Wisata/simpanWisata') ?>" id="frm_calon" enctype="multipart/form-data">
                <div class="modal-body">
                    <input hidden type="text" id="id_user" name="id_user">
                    <div class="form-group">
                        <label for="">Kategori Wisata</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <?php foreach ($kategori as $ktg) { ?>
                                <option value="<?= $ktg->id_kategori ?>"><?= $ktg->kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Objek Wisata</label>
                        <input type="text" name="objek" id="objek" class="form-control" placeholder="Nama Objek Wisata">
                    </div>
                    <div class="form-group">
                        <label for="">Lokasi Objek</label>
                        <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="lokasi Objek Wisata">
                    </div>
                    <div class="form-group">
                        <label for="">deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="deskripsi Wisata">
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="<?= site_url('Wisata/Data_wisata'); ?>" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>