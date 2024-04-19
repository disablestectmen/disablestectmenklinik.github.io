<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
	<div class="app-brand demo">
		<a href="<?= site_url('Dashboard') ?>" class="app-brand-link">
			<span class="app-brand-text fs-3 fw-bold ms-2">Dashboard</span>
		</a>
		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>

	<ul class="menu-inner py-1 pb-4">
		<!-- Dashboards -->
		<li class="menu-item">
			<a href="<?= site_url('Dashboard') ?>" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="Dashboards">Dashboards</div>
				<!-- <div class="badge bg-danger rounded-pill ms-auto">5</div> -->
			</a>
			<!-- <ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('Dashboard') ?>" class="menu-link">
						<div data-i18n="Analytics">Analytics</div>
					</a>
				</li>
			</ul> -->
		</li>

		<!-- Pages Pendataan Pasien -->
		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Pendataan Pasien</span>
		</li>
		<li class="menu-item">
			<a href="<?= site_url('pendaftaran/form_pendaftaran/') ?>" class="menu-link">
				<div data-i18n="Pendaftaran">Form Pendaftaran</div>
			</a>
		</li>
		<li class="menu-item">
			<a href="javascript:void(0);" class="menu-link menu-toggle">

				<div data-i18n="Medis">Medis</div>
			</a>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('medis/medis_list/') ?>" class="menu-link">
						<div data-i18n="Basic">Data Medis</div>
					</a>
				</li>
			</ul>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('medis/hasil_medis_list/') ?>" class="menu-link">
						<div data-i18n="Basic">Hasil Medis</div>
					</a>
				</li>
			</ul>
		</li>

		<!-- Pages Product -->
		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Produk</span>
		</li>
		<li class="menu-item">
			<a href="javascript:void(0);" class="menu-link menu-toggle">

				<div data-i18n="Product">Produk</div>
			</a>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('produk/produk_list/') ?>" class="menu-link">
						<div data-i18n="Basic">List produk</div>
					</a>
				</li>
			</ul>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('produk/sales_list/') ?>" class="menu-link">
						<div data-i18n="Basic">List Penjualan</div>
					</a>
				</li>
			</ul>
		</li>

		<!-- Pages Rekap -->
		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Rekap</span>
		</li>
		<li class="menu-item">
			<a href="javascript:void(0);" class="menu-link menu-toggle">

				<div data-i18n="Rekap">Rekap</div>
			</a>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('rekap/rekap_medis_list') ?>" class="menu-link">
						<div data-i18n="Basic">Medis</div>
					</a>
				</li>
			</ul>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('rekap/rekap_pasien_list') ?>" class="menu-link">
						<div data-i18n="Basic">Pasien</div>
					</a>
				</li>
			</ul>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('rekap/rekap_product_list') ?>" class="menu-link">
						<div data-i18n="Basic">Penjualan Produk</div>
					</a>
				</li>
			</ul>
		</li>

		<!-- Pages Keuangan -->
		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Laporan</span>
		</li>
		<li class="menu-item">
			<a href="javascript:void(0);" class="menu-link menu-toggle">

				<div data-i18n="Laporan">Laporan</div>
			</a>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('laporan/keuangan_list') ?>" class="menu-link">
						<div data-i18n="Basic">Keuangan</div>
					</a>
				</li>
			</ul>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('log_data/log_penjualan') ?>" class="menu-link">
						<div data-i18n="Basic">Log Penjualan</div>
					</a>
				</li>
			</ul>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="<?= site_url('log_data/log_medis') ?>" class="menu-link">
						<div data-i18n="Basic">Log Medis</div>
					</a>
				</li>
			</ul>
		</li>

		<!-- Pages Tabel Master -->
		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Master</span>
		</li>
		<?php if ($role == "Operator") : ?>
			<li class="menu-item">
				<a href="javascript:void(0);" class="menu-link menu-toggle">

					<div data-i18n="Account Settings">Tabel</div>
					<!-- <div class="badge bg-danger rounded-pill ms-auto">5</div> -->
				</a>
				<ul class="menu-sub">
					<li class="menu-item">
						<a href="<?= base_url('#') ?>" class="menu-link">
							<div data-i18n="Produk">Produk</div>
						</a>
					</li>
				</ul>
				<ul class="menu-sub">
					<li class="menu-item">
						<a href="<?= base_url('#') ?>" class="menu-link">
							<div data-i18n="Uang">Uang Cas</div>
						</a>
					</li>
				</ul>
			</li>
		<?php endif; ?>

		<!-- Pages Account Setting -->
		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">User</span>
		</li>
		<?php if ($role == "Operator") : ?>
			<li class="menu-item">
				<a href="javascript:void(0);" class="menu-link menu-toggle">

					<div data-i18n="Account Settings">Account Settings</div>
					<!-- <div class="badge bg-danger rounded-pill ms-auto">5</div> -->
				</a>
				<ul class="menu-sub">
					<li class="menu-item">
						<a href="<?= base_url('users') ?>" class="menu-link">
							<div data-i18n="User">User</div>
						</a>
					</li>
				</ul>
			</li>
		<?php endif; ?>

		<!-- authenteication -->
		<li class="menu-item">
			<a href="javascript:void(0);" class="menu-link menu-toggle">
				<div data-i18n="Authentications">Authentications</div>
			</a>
			<ul class="menu-sub">
				<?php if ($role == "Operator") : ?>
					<li class="menu-item">
						<a href="auth-register-basic.html" class="menu-link">
							<div data-i18n="Basic">Register</div>
						</a>
					</li>
				<?php endif; ?>
				<li class="menu-item">
					<a href="<?= site_url('user_profile/change_password/') ?>" class="menu-link">
						<div data-i18n="Basic">Change Password</div>
					</a>
				</li>
			</ul>
		</li>
	</ul>
</aside>
<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">
	<!-- Navbar -->

	<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme z-3" id="layout-navbar">
		<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
			<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
				<i class="bx bx-menu bx-sm"></i>
			</a>
		</div>

		<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
			<!-- title form -->
			<div class="navbar-nav align-items-center">
				<div class="nav-item d-flex align-items-center">
					<span><?= $title ?></span>
				</div>
			</div>
			<!-- /title form -->

			<ul class="navbar-nav flex-row align-items-center ms-auto">
				<!-- Place this tag where you want the button to render. -->
				<li class="nav-item lh-1 me-3">
					<a class="github-button" href="" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Super User">Welcome, <?= $user->name ?></a>
				</li>

				<!-- User -->
				<li class="nav-item navbar-dropdown dropdown-user dropdown">
					<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
						<div class="avatar avatar-online">
							<img src="<?= site_url() ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
						</div>
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li>
							<a class="dropdown-item" href="#">
								<div class="d-flex">
									<div class="flex-shrink-0 me-3">
										<div class="avatar avatar-online">
											<img src="<?= site_url() ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
										</div>
									</div>
									<div class="flex-grow-1">
										<span class="fw-medium d-block"><?= $user->name ?></span>
										<small class="text-muted"><?= $role ?></small>
									</div>
								</div>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<a class="dropdown-item" href="<?= site_url('user_profile') ?>">
								<i class="bx bx-user me-2"></i>
								<span class="align-middle">My Profile</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<a class="dropdown-item" href="<?= site_url('auth/logout') ?>">
								<i class="bx bx-power-off me-2"></i>
								<span class="align-middle">Log Out</span>
							</a>
						</li>
					</ul>
				</li>
				<!--/ User -->
			</ul>
		</div>
	</nav>
	<!-- / Navbar -->
	<!-- Content wrapper -->
	<!-- content view -->
	<!-- Content -->