<div class="content-wrapper">
    <div class="container">
        <h2>Edit Data Kelas</h2>
        <div class="box">
            <section class="content">
                <?php foreach ($kelas as $k) : ?>
                    <?php echo form_open_multipart('kelas/update'); ?>
                    <div class="form-group">
                        <label>Nama Kelas</label>
                        <input type="hidden" name="id" class="form-control" value="<?= $k->id ?>">
                        <input type="text" name="nama_kelas" class="form-control" value="<?= $k->nama_kelas ?>">
                    </div>
                    <div class="form-group">
                        <label>ID Kelas</label>
                        <input type="text" name="id_kelas" class="form-control" value="<?= $k->id_kelas ?>" disabled>
                        <input type="hidden" name="id_kelas" value="<?= $k->id_kelas ?>">
                    </div>
                    <div class="form-group">
                        <label for="materi">Materi</label> <br>
                        <select class="form-control" name="kode_materi" id="materi" aria-label="Default select example" required>
                            <option value="<?= $k->kode_materi; ?>" selected><?= $k->nama_materi; ?></option>
                            <?php foreach ($materi as $m) : ?>
                                <option value="<?= $m->kode_materi; ?>"><?= $m->nama_materi ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="<?= $k->harga ?>">
                    </div>
                    <!-- <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="foto" class="form-control" value="<?= base_url() ?>assets/foto/kelas/<?= $k->foto; ?>">
                    </div> -->
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                    <?php echo form_close(); ?>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</div>