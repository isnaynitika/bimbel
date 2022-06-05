<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Materi
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Materi</li>
        </ol>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modelId"><i class="fa fa-plus"> Tambah Data Materi</i></button><br><br>
        <?php $this->view('message') ?>
        <div class="box">
            <div class="box-body">
                <?php foreach ($materi as $m) : ?>
                    <ul class="list-group my-2">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $m->nama_materi ?>                            
                            <a href="<?= base_url('materi/detail/') . $m->kode_materi ?>" class="badge badge-primary">Detail</a>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Form Input Materi</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('materi/tambahData'); ?>
                
                <div class="form-group">
                    <label>Nama Materi</label>
                    <input type="text" name="nama_materi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Kode Materi</label>
                    <input type="text" name="kode_materi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="guru">Guru</label> <br>
                    <select class="form-control" name="nip" id="guru" aria-label="Default select example" required>
                        <option disabled selected>Pilih Guru</option>
                        <?php foreach ($guru as $g) : ?>
                            <option value="<?php echo $g->nip ?>"><?= $g->nama_guru ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="isi">Isi Materi</label>
                    <textarea class="form-control" id="isi" name="isi" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Upload File</label>
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Input</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>