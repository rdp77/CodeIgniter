    <!-- CSS Files -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
    </head>

    <body class="profile-page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent mt-4">
            <div class="container">
                <a class="navbar-brand"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-primary">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('C_1461800115/index') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('C_1461800115/artikel') ?>">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('C_1461800115/contact') ?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="wrapper">
            <section class="section-profile-cover section-shaped my-0">
                <!-- Circles background -->
                <img class="bg-image" src="<?php echo base_url(); ?>assets/image/bg.jpg" style="width: 100%;">
                <!-- SVG separator -->
                <div class="separator separator-bottom separator-skew">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </section>