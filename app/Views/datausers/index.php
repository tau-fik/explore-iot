< !doctype html>
	<?=$this->extend('layout/index')?>

	<?=$this->Section('css')?>
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>/template/bootstrap/css/bootstrap.min.css" />
	<link href="<?= base_url();?>/template/css/main.css" rel="stylesheet">
	<link href="<?= base_url();?>/template/css/font-style.css" rel="stylesheet">
	<link href="<?= base_url();?>/template/css/register.css" rel="stylesheet">
	<?=$this->endSection();?>

	<?=$this->Section('js')?>
	<script type="text/javascript" src="<?= base_url();?>/template/js/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url();?>/template/bootstrap/js/bootstrap.min.js"></script>
	<?=$this->endSection();?>

	<?=$this->Section('content')?>
	<div class="row">
		<div class="col-lg-6">
			<div class="register-info-wraper">
				<div id="register-info">
					<div class="cont2">
						<div class="thumbnail"><img src="<?= base_url();?>/template/images/face.jpg" alt="Muhammad Taufikurrahman"
								class="img-circle"></div>
						<h2>Muhammad Taufikurrahman</h2>
					</div>
					<hr>
					<div class="cont2">
						<h2>Choose Your Option</h2>
					</div>
					<br>
					<div class="info-user2">
						<span aria-hidden="true" class="li_user fs1"></span>
						<span aria-hidden="true" class="li_settings fs1"></span>
						<span aria-hidden="true" class="li_mail fs1"></span>
						<span aria-hidden="true" class="li_key fs1"></span>
						<span aria-hidden="true" class="li_lock fs1"></span>
						<span aria-hidden="true" class="li_pen fs1"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-6">
			<div id="register-wraper">
				<form id="register-form" class="form">
					<legend>User Register</legend>
					<div class="body">
						<label for="name">First name</label><input name="name" class="input-huge" type="text">
						<label for="surname">Last name</label><input name="surname" class="input-huge" type="text">
						<label>Username</label><input class="input-huge" type="text">
						<label>E-mail</label><input class="input-huge" type="text">
						<label>Password</label><input class="input-huge" type="text">
					</div>

					<div class="footer">
						<label class="checkbox inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1">I agree with the terms &amp;
							conditions
						</label>

						<button type="submit" class="btn btn-success">Register</button></div>
				</form>
			</div>
		</div>
	</div>
	<?=$this->endSection();?>