<div class="content-wrapper">
    <div class="container">
        <h2>Edit Materi</h2>
        <div class="box">
            <section class="content">
                <?php foreach ($materi as $m) : ?>
                    <?php echo form_open_multipart('materi/update'); ?>
                    <div class="form-group">
                        <label>Nama Materi</label>
                        <input type="hidden" name="id" class="form-control" value="<?= $m->id ?>">
                        <input type="text" name="nama_materi" class="form-control" value="<?= $m->nama_materi ?>">
                    </div>
                    <div class="form-group">
                        <label>Kode Materi</label>
                        <input type="text" name="kode_materi" class="form-control" value="<?= $m->kode_materi ?>">
                    </div>
                    <div class="form-group">
                        <label for="guru">Guru</label> <br>
                        <select class="form-control" name="nip" id="guru" aria-label="Default select example" required>
                            <option value = "<?php echo $m->nip ?>" selected><?= $m->nama_guru; ?></option>
                            <?php foreach ($guru as $g) : ?>
                                <option value="<?php echo $g->nip ?>"><?= $g->nama_guru ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Materi</label>
                        <textarea class="form-control" id="isi" name="isi" rows="3"><?= $m->isi ?></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="file" class="form-control" value="<?= $m->file ?>">
                    </div> -->
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                    <?php echo form_close(); ?>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</div>