<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Calculator
    </title>
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
</head>

<body class="shape shape-style-1 bg-default">
    <section class="section section-shaped section-lg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-white">
                            <div class="text-muted text-center">
                                <?php if (isset($hasil)) : ?>
                                    <strong>
                                        Hasil : <?= $hasil ?>
                                    </strong>
                                <?php else : ?>
                                    <strong>
                                        Kalkulator Sederhana
                                    </strong>
                                <?php endif ?></div>
                        </div>
                        <form action="<?= site_url('C_Calculator/hitung') ?>" method="post">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="form-group mb-3">
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-alternative" name="angka1" placeholder="Angka Pertama" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-alternative" name="angka2" placeholder="Angka Kedua" required>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="operator" class="custom-control-input" id="tambah" value="tambah" type="radio" required>
                                            <label class="custom-control-label font-weight-bold" for="tambah">+</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="operator" class="custom-control-input" id="kurang" value="kurang" type="radio" required>
                                            <label class="custom-control-label font-weight-bold" for="kurang">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="operator" class="custom-control-input" id="kali" value="kali" type="radio" required>
                                            <label class="custom-control-label font-weight-bold" for="kali">x</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="operator" class="custom-control-input" id="bagi" value="bagi" type="radio" required>
                                            <label class="custom-control-label font-weight-bold" for="bagi">:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="hitung" class="btn btn-primary my-4">HITUNG</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>