<div class="row">
    <?php if ($this->session->userdata('role') == 1) { ?>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow">
                <span class="info-box-icon bg-primary"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><?php echo ($register); ?> Orang</span>
                    <span class="info-box-number">Jumlah User register </span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow">
                <span class="info-box-icon bg-success"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><?php echo ($aktif); ?> Orang</span>
                    <span class="info-box-number">Jumlah User Aktif </span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow">
                <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?php echo ($nonaktif); ?> Orang</span>
                    <span class="info-box-number">Jumlah User Non Aktif </span>
                </div>
            </div>
        </div>
    <?php }; ?>
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow">
            <span class="info-box-icon bg-danger"><i class="fas fa-hand-pointer"></i></span>
            <div class="info-box-content">
                <span class="info-box-text"><?php echo ($wisata); ?> Lokasi</span>
                <span class="info-box-number">Jumlah Objek Wisata</span>
            </div>
        </div>
    </div>
</div>