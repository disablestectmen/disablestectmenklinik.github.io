<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<!-- Core CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
	
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/login_style.css" />
	<title>Sign in & Sign up Form</title>
</head>

<body>
	<div class="my-container">
		<div class="forms-container">
			<div class="signin-signup">
				<form id="formAuthentication" class="sign-in-form" method="post" action="<?= base_url('Auth') ?>">
					<?= $this->session->flashdata('message'); ?>
					<h2 class="title">Sign in</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Enter your email" autofocus />
						<?= form_error('email', '<small class="text-danger ps-2">', '</small>') ?>
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
					</div>
					<?= form_error('password', '<small class="text-danger ps-2">', '</small>') ?>

					<button class="btn solid" type="submit">Sign in</button>

					<!-- <p class="social-text">Or Sign in with social platforms</p> -->
					<div class="social-media">

					</div>
				</form>

				<form class="sign-up-form" method="post" action="<?= base_url('registration') ?>">
					<h2 class="title">Sign up</h2>

					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" id="name" name="name" placeholder="Username" value="<?= set_value('name') ?>" autofocus />

						<?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="email" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" />
						<?= form_error('email', '<small class="text-danger ps-2">', '</small>') ?>
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
					</div>
					<?= form_error('password', '<small class="text-danger ps-2">', '</small>') ?>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" id="password2" name="password2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="konfirm password" />
					</div>
					<button type="submit" class="btn">Create</button>
					<!-- <p class="social-text">Already have an account?</p> -->
					<!-- <a href="<?= site_url('Auth') ?>">
								<span>Sign in instead</span>
							</a> -->
					<div class="social-media">

					</div>
				</form>
			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>New here ?</h3>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
						ex ratione. Aliquid!
					</p>
					<button class="btn transparent" id="sign-up-btn">
						Sign up
					</button>
				</div>
				<img src="<?= base_url() ?>assets/img/login/log.svg" class="image" alt="" />
			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>One of us ?</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
						laboriosam ad deleniti.
					</p>
					<button class="btn transparent" id="sign-in-btn">
						Sign in
					</button>
				</div>
				<img src="<?= base_url() ?>assets/img/login/register.svg" class="image" alt="" />
			</div>
		</div>
	</div>

	<script scr="<?= base_url() ?>/assets/vendor/js/bootstrap.js"></script>
	<script src="<?= base_url() ?>assets/js/login.js"></script>
</body>

</html>
