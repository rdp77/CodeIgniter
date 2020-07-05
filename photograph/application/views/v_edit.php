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
	<title>Edit</title>
</head>
<body>
	<?php
		if(!empty($edit)){
			$nbi			= $edit->nbi;
			$tanggal_lahir	= $edit->tanggal_lahir;
			$nama			= $edit->nama;
			$nohp			= $edit->nohp;
			$jenis_kelamin	= $edit->jenis_kelamin;
			$jurusan		= $edit->jurusan;
			$fakultas 		= $edit->fakultas;
			$alamat			= $edit->alamat;
			$motivasi 		= $edit->motivasi;
			?>
	<h2>Edit Data</h2>
	<!-- Form -->
	<form method="post" action="<?php echo site_url('home/update') ?>">
		<div class="container">
			<div class="row row-cols-2">
				<div class="col">
					<input type="text" class="form-control" placeholder="NBI" name="nbi" value="<?php echo $nbi; ?>" readonly>
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="yyyy-mm-dd" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $nama; ?>">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="No. Handphone" name="nohp" value="<?php echo $nohp; ?>">
				</div>
				<div class="col">
					<select id="JenisKelamin" class="form-control" name="jenis_kelamin">
						<option value="">--Pilih--</option>
						<option value="L" <?php if($jenis_kelamin == "L"){echo "selected";} ?>>Laki-Laki</option>
						<option value="P" <?php if($jenis_kelamin == "P"){echo "selected";} ?>>Perempuan</option>
					</select>
				</div>
				<div class="col">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Jurusan" name="jurusan" value="<?php echo $jurusan; ?>">
						<input type="text" class="form-control" placeholder="Fakultas/Prodi" name="fakultas" value="<?php echo $fakultas; ?>">
					</div>
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $alamat; ?>">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Motivasi Mengikuti UKM" name="motivasi" value="<?php echo $motivasi; ?>">
				</div>
			</div>
		</div>
		<!-- Button -->
		<div class="container text-center">
			<div class="row justify-content-md-center">
				<div class="col col-md-2 text-right">
					<a href="<?php echo site_url('home/cek'); ?>" class="btn btn-primary btn-lg">Kembali</a>
				</div>
				<div class="col col-md-2 text-left">
					<button type="submit" class="btn btn-primary btn-lg">Update</button>
				</div>
			</div>
		</div>
	</form>
	<?php
	}else{
		?>
		<h3>Data tidak ditemukan.</h3>
		<?php
	}?>
</body>
</html>