<?php $this->load->view('_partials') ?>
<div class="mt-5 py-5 border-top text-center">
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
                    <th>NBI</th>
                    <th>Semester</th>
                    <th class="text-right">Jurusan</th>
                    <th class="text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($data)) : ?>
                    <?php foreach ($data as $datas) : ?>
                        <tr>
                            <td class="text-center">
                                <?= $datas->id ?>
                            </td>
                            <td>
                                <?= $datas->nama_mhs ?>
                            </td>
                            <td>
                                <?= $datas->nbi_mhs ?></td>
                            </td>
                            <td>
                                <?= $datas->semester_mhs ?></td>
                            </td>
                            <td class="text-right">
                                <?= $datas->jurusan_mhs ?></td>
                            </td>
                            <td class="text-right">
                                <button class="btn btn-default btn-fab btn-icon btn-round" data-target="#edit<?= $datas->id ?>" type="button" data-toggle="modal">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button class="btn btn-warning btn-fab btn-icon btn-round" data-target="#delete<?= $datas->id ?>" type="button" data-toggle="modal">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal Edit -->
                        <div class="modal fade bd-example-modal-lg" data-backdrop="false" tabindex="-1" role="dialog" id="edit<?= $datas->id ?>" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data <?= $datas->nama_mhs ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= site_url('C_1461800115/update') ?>">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="<?= $datas->id ?>" placeholder="<?= $datas->id ?>" type="number" required>
                                                <input class="form-control" name="nama" placeholder="<?= $datas->nama_mhs ?>" type="text" maxlength="50">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="nbi" placeholder="<?= $datas->nbi_mhs ?>" type="number">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="semester" placeholder="<?= $datas->semester_mhs ?>" type="text" maxlength="2">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="jurusan" placeholder="<?= $datas->jurusan_mhs ?>" type="text" maxlength="15">
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
                        <!-- Modal Delete -->
                        <div class="modal fade bd-example-modal-sm" data-backdrop="false" tabindex="-1" role="dialog" id="delete<?= $datas->id ?>" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data <?= $datas->nama_mhs ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= site_url('C_1461800115/delete') ?>">
                                            <input type="hidden" name="id" value="<?= $datas->id ?>" placeholder="<?= $datas->id ?>" type="number" required>
                                            <input type="hidden" class="form-control" name="nama" placeholder="<?= $datas->nama_mhs ?>" type="text" maxlength="50">
                                            <input type="hidden" class="form-control" name="nbi" placeholder="<?= $datas->nbi_mhs ?>" type="number">
                                            <input type="hidden" class="form-control" name="semester" placeholder="<?= $datas->semester_mhs ?>" type="text" maxlength="2">
                                            <input type="hidden" class="form-control" name="jurusan" placeholder="<?= $datas->jurusan_mhs ?>" type="text" maxlength="15">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-warning">Hapus</button>
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
                        <input class="form-control" name="nama" placeholder="Nama Mahasiswa" type="text" maxlength="50">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="nbi" placeholder="NBI Mahasiswa" type="number">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="semester" placeholder="Semester Mahasiswa" type="text" maxlength="2">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="jurusan" placeholder="Jurusan Mahasiswa" type="text" maxlength="15">
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