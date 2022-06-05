<div class="content-wrapper">
    <section class="content">
        <div class="container my-2">
            <div class="col-md-8">
                <h2><strong>Detail Data Murid</strong></h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="<?= base_url() ?>assets/foto/murid/<?= $detail->foto; ?>" width="90" height="110">
                        <h4>Nama Murid : <?= $detail->nama; ?></h4>
                        <hr>
                        <h4>NIS : <?= $detail->nis; ?></h4>
                        <hr>
                        <h4>Jenis Kelamin : <?= $detail->jk; ?></h4>
                        <hr>
                        <h4>Tanggal Lahir : <?= $detail->tgl_lahir; ?></h4>
                        <hr>
                        <h4>Alamat : <?= $detail->alamat; ?></h4>
                    </div>
                </div>
                <a href="<?= base_url('murid') ?>" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </section>
</div>