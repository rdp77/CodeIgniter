<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Home
    </title>
    <?php $this->load->view('_partials') ?>
    <!-- Content -->
    <section class="section bg-secondary">
        <div class="container">
            <div class="card card-profile shadow mt--300">
                <div class="px-4">
                    <div class="card-profile-image mb-9">
                        <a href="javascript:;">
                            <img src="<?php echo base_url(); ?>assets/image/avatar.png" class="rounded-circle">
                        </a>
                    </div>
                    <div class="text-center">
                        <h3>Moh Ravi Dwi Putra</h3>
                        <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Surabaya, Indonesia</div>
                        <div><i class="ni education_hat mr-2"></i>Universitas 17 Agustus 1945 Surabaya</div>
                    </div>
                    <div class="mt-5 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <?php if (isset($home)) : ?>
                                    <p>
                                        <?php echo $home ?>
                                    </p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </body>

</html>