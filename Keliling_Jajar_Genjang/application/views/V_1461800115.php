<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		Tugas Praktikum 1
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
										Hasil : <?php echo $hasil ?>
									</strong>
								<?php else : ?>
									<strong>
										Keliling Jajar Genjang
									</strong>
								<?php endif ?></div>
						</div>
						<form action="<?php echo site_url('C_1461800115/hitung') ?>" method="post">
							<div class="card-body px-lg-5 py-lg-5">
								<div class="form-group mb-3">
									<div class="form-group">
										<input type="number" class="form-control form-control-alternative" name="sisialas" placeholder="Sisi Alas" required>
									</div>
								</div>
								<div class="form-group">
									<input type="number" class="form-control form-control-alternative" name="sisimiring" placeholder="Sisi Miring" required>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-primary my-4">HITUNG</button>
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