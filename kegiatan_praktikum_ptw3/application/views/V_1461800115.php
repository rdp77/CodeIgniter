<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		Kegiatan Praktikum 3
	</title>
	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" type="text/css">
</head>

<body class="profile-page">
	<div class="wrapper">
		<section class="section-profile-cover section-shaped my-0">
			<!-- Circles background -->
			<img class="bg-image" src="<?php echo base_url(); ?>assets/image/bg.jpg" style="width: 100%;">
		</section>
		<section class="section bg-secondary">
			<div class="container mt--300">
				<div class="card shadow">
					<div class="px-4 mt-5">
						<div class="text-center">
							<h1>Kegiatan Praktikum 3</h1>
						</div>
						<div class="mt-5 py-5 border-top text-center">
							<div class="row justify-content-center">
								<table class="table">
									<p></p>
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th>Nama Barang</th>
											<th>Kategori</th>
											<th>Harga Beli</th>
											<th class="text-right">Harga Jual</th>
											<th class="text-right">Nama Gudang</th>
										</tr>
									</thead>
									<?php $i = 1 ?>
									<tbody>
										<?php if (isset($hasil)) : ?>
											<?php foreach ($hasil as $hasils) : ?>
												<tr>
													<td class="text-center">
														<?= $i++ ?>
													</td>
													<td>
														<?= $hasils->nm_brg ?>
													</td>
													<td><?= $hasils->nm_kat ?></td>
													<td><?= $hasils->harga_beli ?></td>
													<td class="text-right">
														<?= $hasils->harga_jual ?></td>
													<td class="text-right">
														<?= $hasils->nm_gd ?>
													</td>
												</tr>
											<?php endforeach ?>
										<?php else : ?>
											<strong>
												ERROR
											</strong>
										<?php endif ?>
									</tbody>

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</body>

</html>