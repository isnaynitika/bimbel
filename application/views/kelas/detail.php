<div class="content-wrapper">
    <section class="content">
        <div class="container my-2">
            <div class="col-md-8">
                <h2><strong>Detail Data Kelas</strong></h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- <?php var_dump($detail) ?> -->
                        <?php foreach ($detail as $dtl): ?>
                            <img src="<?= base_url() ?>assets/foto/kelas/<?= $dtl->foto; ?>" width="90" height="110">
                            <h4>Nama Kelas : <?= $dtl->nama_kelas; ?></h4>
                            <h4>ID Kelas : <?= $dtl->id_kelas; ?></h4>
                            <h4>Nama Materi : <?= $dtl->nama_materi; ?></h4>
                            <h4>Harga : <?= $dtl->harga; ?></h4>
                        <?php endforeach ?>
                    </div>
                </div>
                <a href="<?= base_url('kelas') ?>" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </section>
</div>