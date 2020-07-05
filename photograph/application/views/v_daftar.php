<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/bootstrap.min.css" type="text/css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/custom.css" type="text/css">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/main/icon.png">
	<!-- Data Body -->
	<title>Pendaftaran</title>
</head>
<body>
	<h2>Pendaftaran</h2>
	<!-- Form -->
	<form method="post" action="<?php echo site_url('home/save') ?>">
		<div class="container">
			<div class="row row-cols-2">
				<div class="col">
					<input type="text" class="form-control" placeholder="NBI" name="nbi" maxlength="10">
				</div>
				<div class="col">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Tanggal" name="tanggal" maxlength="2">
						<input type="text" class="form-control" placeholder="Bulan" name="bulan" maxlength="2">
						<input type="text" class="form-control" placeholder="Tahun" name="tahun" maxlength="4">
					</div>
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="No. Handphone" name="nohp" maxlength="12">
				</div>
				<div class="col">
					<select id="JenisKelamin" class="form-control" name="jenis_kelamin">
						<option value="">--Pilih--</option>
						<option value="L">Laki-Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
				<div class="col">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Jurusan" name="jurusan" >
						<input type="text" class="form-control" placeholder="Fakultas/Prodi" name="fakultas">
					</div>
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Alamat" name="alamat">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Motivasi Mengikuti UKM" name="motivasi">
				</div>
			</div>
		</div>
		<!-- Button -->
		<div class="container text-center">
			<div class="row justify-content-md-center">
				<div class="col col-md-2 text-right">
					<a href="<?php echo site_url(); ?>" class="btn btn-primary btn-lg">Kembali</a>
				</div>
				<div class="col col-md-2 text-left">
					<button type="submit" class="btn btn-primary btn-lg">Daftar</button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>