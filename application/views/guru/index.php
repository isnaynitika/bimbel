<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Guru
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Guru</li>
        </ol>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modelId"><i class="fa fa-plus"> Tambah Data Guru</i></button><br><br>
        
        <?php $this->view('message') ?>

        <div class="box">
            <div class="box-body">
                <table class="table table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama Guru</th>
                        <th>NIP</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                        <th>Edit</th>
                    </tr>

                    <?php $no = 1; ?>
                    <?php foreach ($guru as $g) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $g->nama_guru ?></td>
                            <td><?= $g->nip ?></td>
                            <td><?= $g->jk ?></td>
                            <td><?= $g->tgl_lahir; ?></td>
                            <td><?= $g->alamat ?></td>
                            <td><?= anchor('guru/detail/' . $g->id, '<div class="btn btn-primary"><i class="fa fa-search"></i></div>') ?>
                            </td>
                            <td onclick="return confirm('Apakah anda yakin?');"><?= anchor('guru/hapus/' . $g->id, '<div class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </div>') ?>
                            </td>
                            <td> <?= anchor('guru/edit/' . $g->id, '<div class="btn btn-sm btn-success">
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
                <h3 class="modal-title">Form Input Data Murid</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('guru/tambahData'); ?>
                <div class="form-group">
                    <label>Nama Guru</label>
                    <input type="text" name="nama_guru" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" name="nip" class="form-control">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="jk" name="jk" value="Laki - Laki">
                    <label class="form-check-label" for="jk">Laki - Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="jk" name="jk" value="Wanita">
                    <label class="form-check-label" for="jk">Wanita</label>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" name="foto" class="form-control" required>
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