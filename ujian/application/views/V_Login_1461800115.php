<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Login
    </title>
    <!-- CSS Files -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
</head>

<body class="shape shape-style-1 bg-default">
    <section class="section section-shaped section-lg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-white">
                            <div class="text-muted text-center">
                                <?php if (isset($data)) : ?>
                                    <strong class="center mb-3">
                                        <?= implode($data) ?>
                                    </strong>
                                <?php endif ?>
                            </div>
                        </div>
                        <form action="<?= site_url('C_Auth_1461800115/auth') ?>" method="post">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="form-group mb-3">
                                    <div class="form-group">
                                        <input class="form-control form-control-alternative" name="username" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-alternative" name="password" placeholder="Password" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Login</button>
                                    <a href="<?= base_url('C_Auth_1461800115/register') ?>" class="btn btn-primary my-4">Register</a>
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