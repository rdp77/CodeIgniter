<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Kegiatan Praktikum 2
    </title>
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
</head>

<body class="shape shape-style-1 bg-default">
    <div class="text-white text-center mt-5">
        <?php
        for ($i = 0; $i < $bintang; $i++) {
            for ($j = 0; $j < $bintang; $j++) {
                if ($i == $j) {
                    echo '0  ';
                } else {
                    echo '*  ';
                }
            }
            echo '<br>';
        }
        ?>
    </div>
    <div class="text-center">
        <a href="<?= site_url(); ?>C_1461800115/index" class="btn btn-primary my-4">KEMBALI</a>
    </div>
</body>

</html>