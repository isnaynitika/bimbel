<div class="content-wrapper">
    <div class="container">
        <h2>Edit Data Pembelian</h2>
        <div class="box">
            <section class="content">
                <?php foreach ($pembelian as $p) : ?>
                    <?php echo form_open_multipart('pembelian/update'); ?>
                    <div class="form-group">
                        <label for="murid">Nama Murid</label> <br>
                        <select class="form-control" name="nama" id="murid" aria-label="Default select example" required>
                            <option value="<?= $p->nama; ?>" selected><?= $p->nama; ?></option>
                            <?php foreach ($murid as $m) : ?>
                                <option value="<?= $m->nama ?>"><?= $m->nama ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <label>Nama Murid</label>
                        <input type="text" name="nama" class="form-control" value="<?= $p->nama ?>">
                    </div> -->
                    <div class="form-group">
                        <label>ID Pembelian</label>
                        <input type="text" name="id_pembelian" class="form-control" value="<?= $p->id_pembelian ?>" disabled>
                        <input type="hidden" name="id_pembelian" value="<?= $p->id_pembelian ?>">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label> <br>
                        <select class="form-control" name="id_kelas" id="kelas" aria-label="Default select example" required>
                            <?php foreach ($kelas as $k) : ?>
                                <?php if($k->id_kelas == $p->id_kelas): ?>
                                    <option value="<?= $p->id_kelas; ?>" selected><?= $p->nama_kelas; ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $k->id_kelas ?>"><?= $k->nama_kelas ?></option>
                                <?php endif ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                    <?php echo form_close(); ?>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</div>