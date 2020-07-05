<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Artikel
    </title>
    <?php $this->load->view('_partials') ?>
    <!-- Content -->
    <section class="section bg-secondary">
        <div class="container">
            <div class="card shadow mt--300">
                <div class="px-4 mt-5">
                    <div class="text-center">
                        <h1>Artikel</h1>
                    </div>
                    <div class="mt-5 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <?php foreach ($artikel as $artikels) : ?>
                                    <p><?= $artikels ?></p>
                                <?php endforeach ?>
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