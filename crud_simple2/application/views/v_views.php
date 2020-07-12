<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/bootstrap.min.css" type="text/css">
  	<!-- Custom CSS -->
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/custom.css" type="text/css">
  	<!-- Font Awesome CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
    crossorigin="anonymous">
  	<!-- Favicon -->
  	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/main/icon.png">
  	<!-- Data Body -->
  	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa Yang Terdaftar</h1>
	  <!-- Seacrh -->
	  <form action="<?php echo site_url('home/cek') ?>" method="post">
	  <div class="input-group mb-3 container">
	    <input type="text" class="form-control" placeholder="Cari mahasiswa berdasarkan NBI" name="nbi">
	    <div class="input-group-append">
	      <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
	    </div>
	  </div>
	</form>
  <!-- Data Table -->
  <div class="vertical-scroll">
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">NBI</th>
          <th scope="col">Nama</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
      	<?php $no = 1; foreach ($getAll as $key): ?>
        <tr>
          <th scope="row"><?php echo $no++ ?></th>
          <td><?php echo $key->nbi; ?></td>
          <td><?php echo $key->nama; ?></td>
          <td><?php echo $key->jurusan; ?></td>
          <td>
          	<a href="<?php echo site_url('home/edit/'.$key->nbi) ?>" class="btn btn-success" title="Edit"><i class="fas fa-pencil-alt"></i></a>
          	<a href="<?php echo site_url('home/delete/'.$key->nbi) ?>" class="btn btn-danger" title="Hapus" onclick="return confirm('Yakin Ingin Menghapus Data?')"><i class="fas fa-trash"></i></a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <!-- Button -->
  <div class="custombtn">
    <a href="<?php echo site_url() ?>" class="btn btn-primary btn-lg">Kembali</a>
  </div>
</body>
</html>