<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Kelas
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Kelas</li>
        </ol>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modelId"><i class="fa fa-plus"> Tambah Data Kelas</i></button><br><br>
        <?php $this->view('message') ?>
        <div class="box">
            <div class="box-body">
                <table class="table table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama Kelas</th>
                        <th>ID Kelas</th>
                        <th>Harga</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        <th>Edit</th>
                    </tr>

                    <?php $no = 1; ?>
                    
                    <?php foreach ($kelas as $k) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $k->nama_kelas ?></td>
                            <td><?= $k->id_kelas ?></td>
                            <td><?= "Rp. " . number_format($k->harga)  ?></td>
                            <td><?= anchor('kelas/detail/' . $k->id_kelas, '<div class="btn btn-primary"><i class="fa fa-search"></i></div>') ?>
                            </td>
                            <td onclick="return confirm('Apakah anda yakin?');"><?= anchor('kelas/hapus/' . $k->id_kelas, '<div class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </div>') ?>
                            </td>
                            <td> <?= anchor('kelas/edit/' . $k->id_kelas, '<div class="btn btn-sm btn-success">
                                <i class="fa fa-edit"></i>
                            </div>') ?>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Form Input Data Kelas</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('kelas/tambahData'); ?>
                <div class="form-group">
                    <label>Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>ID Kelas</label>
                    <input type="text" name="id_kelas" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="hidden" name="kode_materi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="materi">Materi</label> <br>
                    <select class="form-control" name="kode_materi" id="materi" aria-label="Default select example" required>
                        <option disabled selected>Pilih Materi</option>
                        <?php foreach ($materi as $m) : ?>
                            <option value="<?= $m->kode_materi ?>"><?= $m->nama_materi ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" name="foto" class="form-control">
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