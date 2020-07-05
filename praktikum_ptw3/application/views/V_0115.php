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
						<a class="nav-link" href="<?= base_url('C_0115/index') ?>">Select</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('C_0115/selectw') ?>">Where</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('C_0115/selectj') ?>">Join</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('C_0115/selectjw') ?>">Join Where</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('C_0115/selectjl') ?>">Join Like</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('C_0115/selects') ?>">Sum</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->
	<div class="wrapper">
		<section class="section-profile-cover section-shaped my-0">
			<img class="bg-image" src="<?php echo base_url(); ?>assets/image/bg.jpg" style="width: 100%;">
		</section>
		<section class="section bg-secondary">
			<div class="container mt--300">
				<div class="card shadow">
					<div class="px-4 mt-5">
						<div class="text-center">
							<h1>Kegiatan Praktikum 3</h1>
						</div>