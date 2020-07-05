<?php $this->load->view('_partials') ?>
<div class="mt-5 py-5 border-top text-center">
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama Siswa</th>
                    <th>NIS</th>
                    <th>Semester</th>
                    <th class="text-right">Tanggal</th>
                    <th class="text-right">Absensi</th>
                    <th class="text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($data)) : ?>
                    <?php $i = 1;
                    foreach ($data as $datas) : ?>
                        <tr>
                            <td class="text-center">
                                <?= $i++ ?>
                            </td>
                            <td>
                                <?= $datas->nama ?>
                            </td>
                            <td>
                                <?= $datas->nis ?></td>
                            </td>
                            <td>
                                <?= $datas->status ?></td>
                            </td>
                            <td class="text-right">
                                <?= $datas->tanggal ?></td>
                            </td>
                            <td class="text-right">
                                <?= $datas->absen ?></td>
                            </td>
                            <td class="text-right">
                                <button class="btn btn-default btn-fab btn-icon btn-round" data-target="#edit<?= $i ?>" type="button" data-toggle="modal">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal Edit -->
                        <div class="modal fade bd-example-modal-lg" data-backdrop="false" tabindex="-1" role="dialog" id="edit<?= $i ?>" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data <?= $datas->nama ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= site_url('C_1461800115/update') ?>">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="<?= $datas->id_absen ?>" placeholder="<?= $datas->id_absen ?>" type="number" required>
                                                <input class="form-control" name="nis" value="<?= $datas->nis ?>" type="number" readonly>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="semester" required>
                                                    <option>1 - Ganjil</option>
                                                    <option>2 - Genap</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="tanggal" placeholder="<?= $datas->tanggal ?>" type="date" required>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="absen" placeholder="<?= $datas->absen ?>" maxlength="1" type="text" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-default">Update</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else : ?>
                    <strong>
                        ERROR
                    </strong>
                <?php endif ?>
            </tbody>
        </table>
        <button class="btn btn-primary btn-fab btn-icon btn-round" data-target="#tambah" type="button" data-toggle="modal">
            <i class="fa fa-plus"></i><span class="btn-inner--text">Tambah Data</span>
        </button>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Modal Tambah -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="tambah" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= site_url('C_1461800115/createdata') ?>">
                    <div class="form-group">
                        <select class="form-control" name="nis" required>
                            <?php foreach ($data as $datas) : ?>
                                <option><?= $datas->nis ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="semester" required>
                            <option>1 - Ganjil</option>
                            <option>2 - Genap</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="tanggal" placeholder="yyyy-mm-dd" type="date" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="absen" placeholder="Absensi" maxlength="1" type="text" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="<?= base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>