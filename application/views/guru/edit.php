<div class="content-wrapper">
    <div class="container">
        <h2>Edit Data Guru</h2>
        <div class="box">
            <section class="content">
                <?php foreach ($guru as $g) : ?>
                    <?php echo form_open_multipart('guru/update'); ?>
                    <div class="form-group">
                        <label>Nama Guru</label>
                        <input type="hidden" name="id" class="form-control" value="<?= $g->id ?>">
                        <input type="text" name="nama_guru" class="form-control" value="<?= $g->nama_guru ?>">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control" value="<?= $g->nip ?>">
                    </div>
                    <label>Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="jk" name="jk" value="Laki - Laki" >
                        <label class="form-check-label" for="jk">Laki - Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="jk" name="jk" value="Wanita">
                        <label class="form-check-label" for="jk">Wanita</label>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="<?= $g->tgl_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $g->alamat ?></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="foto" class="form-control" value="<?= $g->foto ?>">
                    </div> -->
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                    <?php echo form_close(); ?>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</div>