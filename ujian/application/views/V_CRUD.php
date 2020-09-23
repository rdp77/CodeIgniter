<?php $this->load->view('_partials') ?>
<div class="mt-5 py-5 border-top text-center">
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Judul Buku</th>
                    <th class="text-right">Tahun Terbit</th>
                    <th class="text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($data)) : ?>
                    <?php $i = 1;
                    foreach ($data as $datas) : ?>
                        <tr>
                            <td class="text-center">
                                <?= $datas->id ?>
                            </td>
                            <td>
                                <?= $datas->judul ?>
                            </td>
                            <td class="text-right">
                                <?= $datas->tahun_terbit ?></td>
                            </td>
                            <td class="text-right">
                                <button class="btn btn-default btn-fab btn-icon btn-round" data-target="#edit<?= $datas->id ?>" type="button" data-toggle="modal">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal Edit -->
                        <div class="modal fade bd-example-modal-lg" data-backdrop="false" tabindex="-1" role="dialog" id="edit<?= $datas->id ?>" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= site_url('C_Auth_1461800115/update') ?>">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="<?= $datas->id ?>" placeholder="<?= $datas->id ?>" type="number" required>
                                                <input class="form-control" name="judul" value="<?= $datas->judul ?>" type="text" required>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="tahun" value="<?= $datas->tahun_terbit ?>" type="number" required>
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
        <a class="btn btn-primary btn-fab btn-icon btn-round" href="<?= site_url('C_Auth_1461800115/exit') ?>">
            Logout
        </a>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Modal Tambah -->
<div class="modal fade bd-example-modal-lg" data-backdrop="false" tabindex="-1" role="dialog" id="tambah" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= site_url('C_Auth_1461800115/createdata') ?>">
                    <div class="form-group">

                        <input class="form-control" name="judul" placeholder="Judul" type="text" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="tahun" placeholder="Tahun Terbit" type="number" required>
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