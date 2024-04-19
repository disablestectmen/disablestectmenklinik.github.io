	<!-- Content wrapper -->
	<div class="content-wrapper">
		<div class="container-xxl flex-grow-1 container-p-y">
			<?= $this->session->flashdata('message'); ?>
			<!-- Basic with Icons -->
			<div class="col-xxl">
				<div class="card mb-4">
					<div class="card-body">
						<form action="<?= base_url('user_profile/edit_change_password') ?>" method="post">
							<div class="col mb-3 form-password-toggle">
								<label class="form-label" for="password_lama">Password Lama</label>
								<div class="input-group input-group-merge">
									<input type="password" id="password_lama" class="form-control form-control-sm" name="password_lama" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password_lama" />
									<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
								</div>
								<?= form_error('password_lama', '<small class="text-danger ps-2">', '</small>') ?>
							</div>
							<div class="col mb-3 form-password-toggle">
								<label class="form-label" for="password_baru">Password Baru</label>
								<div class="input-group input-group-merge">
									<input type="password" id="password_baru" class="form-control form-control-sm" name="password_baru" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password_baru" />
									<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
								</div>
								<?= form_error('password_baru', '<small class="text-danger ps-2">', '</small>') ?>
							</div>
							<div class="col mb-3 form-password-toggle">
								<label class="form-label" for="password_konfirmasi">Konfirmasi Password</label>
								<div class="input-group input-group-merge">
									<input type="password" id="password_konfirmasi" class="form-control form-control-sm" name="password_konfirmasi" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password_konfirmasi" />
									<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
								</div>
								<?= form_error('password_konfirmasi', '<small class="text-danger ps-2">', '</small>') ?>
							</div>
							<div class="row justify-content-end">
								<div class="col-sm-10 text-end">
									<button type="submit" class="btn btn-sm btn-warning">Change Password</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
