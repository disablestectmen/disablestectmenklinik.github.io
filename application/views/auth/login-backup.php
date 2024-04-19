<!DOCTYPE html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title><?= $title ?></title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/favicon/favicon.ico" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/fonts/boxicons.css" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
	<!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/css/demo.css" /> -->

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

	<!-- Page CSS -->
	<!-- Page -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/pages/page-auth.css" />

	<!-- Helpers -->
	<script src="<?= base_url() ?>/assets/vendor/js/helpers.js"></script>
	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="<?= base_url() ?>/assets/js/config.js"></script>
</head>

<body>
	<!-- Content -->

	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner">
				<!-- Register -->
				<div class="card">
					<div class="card-body">
						<!-- Logo -->
						<div class="app-brand justify-content-center">
							<a href="index.html" class="app-brand-link gap-2">
								<span class="app-brand-text demo text-body fw-bold">Login</span>
							</a>
						</div>
						<!-- /Logo -->
						<?= $this->session->flashdata('message'); ?>
						<form id="formAuthentication" class="mb-3" method="post" action="<?= base_url('Auth') ?>">
							<div class="mb-3">
								<label for="email" class="form-label-sm">Email</label>
								<input type="text" class="form-control form-control-sm" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Enter your email" autofocus />
								<?= form_error('email', '<small class="text-danger ps-2">', '</small>') ?>
							</div>
							<div class="mb-3 form-password-toggle">
								<div class="d-flex justify-content-between">
									<label class="form-label-sm" for="password">Password</label>
									<a href="auth-forgot-password-basic.html">
										<small>Forgot Password?</small>
									</a>
								</div>
								<div class="input-group input-group-merge">
									<input type="password" id="password" class="form-control form-control-sm" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
									<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
								</div>
								<?= form_error('password', '<small class="text-danger ps-2">', '</small>') ?>
							</div>
							<div class="mb-3">
								<div class="form-check ps-0">
									<input class="form-check-input-sm" type="checkbox" id="remember-me" />
									<label class="form-check-label-sm" for="remember-me"> Remember Me </label>
								</div>
							</div>
							<div class="mb-3">
								<button class="btn btn-sm btn-primary d-grid w-100" type="submit">Sign in</button>
							</div>
						</form>

						<p class="text-center">
							<span>New on our platform?</span>
							<a href="<?= site_url('registration') ?>">
								<span>Create an account</span>
							</a>
						</p>
					</div>
				</div>
				<!-- /Register -->
			</div>
		</div>
	</div>

	<!-- / Content -->
	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->

	<script src="<?= base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
	<script src="<?= base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
	<script src="<?= base_url() ?>/assets/vendor/js/bootstrap.js"></script>
	<script src="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="<?= base_url() ?>/assets/vendor/js/menu.js"></script>

	<!-- endbuild -->

	<!-- Vendors JS -->

	<!-- Main JS -->
	<script src="<?= base_url() ?>/assets/js/main.js"></script>

	<!-- Page JS -->

	<!-- Place this tag in your head or just before your close body tag. -->
	<script scr="<?= base_url() ?>/assets/vendor/js/button.js"></script>
</body>

</html>
