<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Pembelian
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Pembelian</li>
        </ol>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modelId"><i class="fa fa-plus"> Tambah Data Pembelian</i></button><br><br>
        <?php $this->view('message') ?>
        <div class="box">
            <div class="box-body">
                <table class="table table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama Murid</th>
                        <th>ID Pembelian</th>
                        <th>Kelas</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        <th>Edit</th>
                    </tr>

                    <?php $no = 1; ?>
                    <?php foreach ($pembelian as $p) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $p->nama ?></td>
                            <td><?= $p->id_pembelian ?></td>
                            <td><?= $p->nama_kelas ?></td>
                            <td><?= anchor('pembelian/detail/' . $p->id_pembelian, '<div class="btn btn-primary"><i class="fa fa-search"></i></div>') ?>
                            </td>
                            <td onclick="return confirm('Apakah anda yakin?');"><?= anchor('pembelian/hapus/' . $p->id_pembelian, '<div class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </div>') ?>
                            </td>
                            <td> <?= anchor('pembelian/edit/' . $p->id_pembelian, '<div class="btn btn-sm btn-success">
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
                <h3 class="modal-title">Form Input Data Pembelian</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('pembelian/tambahData'); ?>
                <div class="form-group">
                    <label for="nama">Nama Murid</label> <br>
                    <select class="form-control" name="nama" id="nama" aria-label="Default select example" required>
                        <option disabled selected>Pilih Murid</option>
                        <?php foreach ($murid as $m) : ?>
                            <option><?= $m->nama ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <input type="hidden" name="nis" class="form-control" required>
                </div> -->
                <div class="form-group">
                    <label>ID Pembelian</label>
                    <input type="text" name="id_pembelian" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="hidden" name="kode_kelas" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="materi">Kelas</label> <br>
                    <select class="form-control" name="id_kelas" id="materi" aria-label="Default select example" required>
                        <option disabled selected>Pilih Kelas</option>
                        <?php foreach ($kelas as $k) : ?>
                            <option value="<?= $k->id_kelas ?>"><?= $k->nama_kelas ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Input</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>