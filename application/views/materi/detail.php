<div class="content-wrapper">
    <section class="content">
        <div class="">
            <div class="col-md-6">
                <h2><strong>Detail Materi</strong></h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- <?php var_dump($detail) ?> -->
                        <?php foreach ($detail as $dtl): ?>
                            <h4 class="card-title"><?= $dtl->nama_materi; ?></h4>
                            <h5 class="card-title">Guru : <?= $dtl->nama_guru ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Kode : <?= $dtl->kode_materi ?></h6>
                            <p class="card-text"><?= $dtl->isi ?></p>
                            <br>
                            <a href="<?= base_url('assets/file/') . $dtl->file ?>" class="btn btn-primary">Lihat Materi</a>
                            <br><br>
                            <a href="<?= base_url('materi/edit/') . $dtl->kode_materi ?>" class="btn btn-success">Edit</a>
                            <a onclick="return confirm('Apakah anda yakin?');" href="<?= base_url('materi/hapus/') . $dtl->kode_materi ?>" class="btn btn-danger">Hapus</a>
                        <?php endforeach ?>
                    </div>
                </div>
                <a href="<?= base_url('materi') ?>" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </section>
</div>