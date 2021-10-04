<?= $this->extend('layout/index') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/template/bootstrap/css/bootstrap.min.css" />
<link href="css/main.css" rel="stylesheet">
<link href="<?= base_url(); ?>/template/css/font-style.css" rel="stylesheet">
<link href="<?= base_url(); ?>/template/css/flexslider.css" rel="stylesheet">
<!-- DATA TABLE CSS -->
<link href="<?= base_url(); ?>/template/css/table.css" rel="stylesheet">

<?= $this->endSection(); ?>

<?= $this->section('js') ?>

<script type="text/javascript" src="<?= base_url(); ?>/template/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/template/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?= base_url(); ?>/template/js/admin.js"></script>

<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<!-- CONTENT -->

<div class="row">

	<div class="col-sm-12 col-lg-12">
		<h4><strong>Data Sensor INA 1</strong></h4>
		<table class="display">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal & Waktu</th>
					<th>Nilai Voltase</th>
					<th>Nilai Arus</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($ina1 as $d) : ?>
					<tr class="odd">
						<td><?= $d['id']; ?></td>
						<td><?= $d['created_at']; ?></td>
						<td><?= $d['data_volt']; ?></td>
						<td><?= $d['data_arus']; ?></td>
						<td class="center"></td>
					</tr>
				<?php endforeach ?>
			</tbody>

		</table>
		<?= $ina1_pager->simpleLinks() ?>
		<br>
	</div>
</div>

<div class="row">

	<div class="col-sm-12 col-lg-12">
		<h4><strong>Data Sensor INA 2</strong></h4>
		<table class="display">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal & Waktu</th>
					<th>Nilai Voltase</th>
					<th>Nilai Arus</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($ina2 as $d) : ?>
					<tr class="odd">
						<td><?= $d['id']; ?></td>
						<td><?= $d['created_at']; ?></td>
						<td><?= $d['data_volt']; ?></td>
						<td><?= $d['data_arus']; ?></td>
						<td class="center"></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<?= $ina2_pager->simpleLinks() ?>
		<br>
	</div>
</div>

<div class="row">

	<div class="col-sm-12 col-lg-12">
		<h4><strong>Data Sensor Anemometer</strong></h4>
		<table class="display">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal & Waktu</th>
					<th>Nilai anemometer</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($anemo as $d) : ?>
					<tr class="odd">
						<td><?= $d['id']; ?></td>
						<td><?= $d['created_at']; ?></td>
						<td><?= $d['data_anemometer']; ?></td>
						<td class="center"></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<?= $anemo_pager->simpleLinks() ?>
		<br>
	</div>
</div>

<div class="row">

	<div class="col-sm-12 col-lg-12">
		<h4><strong>Data Baterai</strong></h4>
		<table class="display">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal & Waktu</th>
					<th>Nilai Baterai</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($bat as $d) : ?>
					<tr class="odd">
						<td><?= $d['id']; ?></td>
						<td><?= $d['created_at']; ?></td>
						<td><?= $d['data_baterai']; ?></td>
						<td class="center"></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<?= $bat_pager->simpleLinks() ?>
		<br>
	</div>
</div>
<?= $this->endSection(); ?>