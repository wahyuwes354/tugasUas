<div class="row">
    <div class="col-md-4">
        <div class="card">

        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
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
                        <label for="">Deskripsi</label>
                        <input type="text" name="nmcalon" id="nmcalon" class="form-control" placeholder="Nama Calon">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" onclick="simpan()">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>