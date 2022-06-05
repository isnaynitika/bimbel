<div class="content-wrapper">
    <div class="container">
        <h2>Edit Data Murid</h2>
        <div class="box">
            <section class="content">
                <?php foreach ($murid as $m) : ?>
                    <?php echo form_open_multipart('murid/update'); ?>
                    <div class="form-group">
                        <label>Nama Murid</label>
                        <input type="hidden" name="id" class="form-control" value="<?= $m->id ?>">
                        <input type="text" name="nama" class="form-control" value="<?= $m->nama ?>">
                    </div>
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" name="nis" class="form-control" value="<?= $m->nis ?>">
                    </div>
                    <label>Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="jk" name="jk" value="Laki - Laki">
                        <label class="form-check-label" for="jk">Laki - Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="jk" name="jk" value="Wanita">
                        <label class="form-check-label" for="jk">Wanita</label>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="<?= $m->tgl_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $m->alamat ?></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="foto" class="form-control" value="<?= $m->foto ?>">
                    </div> -->
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                    <?php echo form_close(); ?>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</div>