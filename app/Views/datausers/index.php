< !doctype html>
	<?= $this->extend('layout/index') ?>

	<?= $this->Section('css') ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/template/bootstrap/css/bootstrap.min.css" />
	<link href="<?= base_url(); ?>/template/css/main.css" rel="stylesheet">
	<link href="<?= base_url(); ?>/template/css/font-style.css" rel="stylesheet">
	<link href="<?= base_url(); ?>/template/css/register.css" rel="stylesheet">
	<!-- DATA TABLE CSS -->
	<link href="<?= base_url(); ?>/template/css/table.css" rel="stylesheet">
	<?= $this->endSection(); ?>

	<?= $this->Section('js') ?>
	<script type="text/javascript" src="<?= base_url(); ?>/template/js/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/template/bootstrap/js/bootstrap.min.js"></script>
	<?= $this->endSection(); ?>

	<?= $this->Section('content') ?>
	<div class="container">

		<div class="register-info-wraper">
			<div id="register-info">
				<div class="cont2">
					<div class="thumbnail"><img src="<?= base_url(); ?>/template/images/face.jpg" alt="Muhammad Taufikurrahman" class="img-circle"></div>
					<h2><?= $user_login['nama']; ?></h2>
					<h2><?= $user_login['email'] ?></h2>
				</div>
				<br>

			</div>
		</div>
		<br>

		<?php if (session()->get('permision') === "admin") { ?>

			<table class="display">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Username</th>
						<th>Email</th>
						<th>Permision</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($user as $u) : ?>
						<tr class="odd">
							<td><?= $i++; ?></td>
							<td><?= $u['nama']; ?></td>
							<td><?= $u['username']; ?></td>
							<td><?= $u['email']; ?></td>
							<td><?= $u['permision']; ?></td>
							<td class="center">
								<a href="/reset/<?= $u['id'] ?>" class="btn btn-success badge rounded-pill" onclick="return confirm('Apakah anda yakin untuk me-reset password.?')">Reset</a>
								<form action="/datausers/<?= $u['id'] ?>" method="POST" class="d-inline">
									<?= csrf_field(); ?>
									<input type="hidden" name="_method" value="DELETE">
									<button type="submit" class="btn btn-danger badge rounded-pill" onclick="return confirm('Apakah anda yakin untuk di hapus.?')">Hapus</i></button>
								</form>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>

			<div id="register-wraper">

				<form class="form" id="register-form" action="/DataUsers/register" method="POST" enctype="multipart/form-data">
					<legend>User Register</legend>

					<div class="form-group">
						<label for="nama">Nama Lengkap</label>
						<input type="text" class="form-control" id="nama" name="nama">
						<?php if ($validation->hasError('nama')) { ?>
							<p class="text-danger"><?= $validation->getError('nama') ?></p>
						<?php } ?>
					</div>

					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username">
						<?php if ($validation->hasError('username')) { ?>
							<p class="text-danger"><?= $validation->getError('username') ?></p>
						<?php } ?>
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email">
						<?php if ($validation->hasError('email')) { ?>
							<p class="text-danger"><?= $validation->getError('email') ?></p>
						<?php } ?>
					</div>

					<div class="form-group">
						<label for="exampleFormControlSelect1">Permision</label>
						<select class="form-control" id="exampleFormControlSelect1" name="permision">
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password">
						<?php if ($validation->hasError('password')) { ?>
							<p class="text-danger"><?= $validation->getError('password') ?></p>
						<?php } ?>
					</div>

					<div class="footer mt-4">
						<button type="submit" class="btn btn-success btn-sm">Register</button>
					</div>

				</form>

			</div>
		<?php } ?>
	</div>
	<?= $this->endSection(); ?>