<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">
	<?= $this->session->flashdata('message'); ?>
	<!-- Basic with Icons -->
	<div class="col-xxl">
		<div class="card mb-4">
			<div class="card-body">
				<?= form_open_multipart('user_profile/edit'); ?>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
					<div class="col-sm-10">
						<div class="input-group input-group-merge">
							<span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
							<input type="text" name="name" class="form-control form-control-sm" id="basic-icon-default-fullname" value="<?= $user->name ?>" aria-describedby="basic-icon-default-fullname2" />
						</div>
						<?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Picture</label>
					<div class="col">
						<div class="row justify-content-between">
							<div class="col-sm-10">
								<div class="input-group input-group-merge">
									<input class="form-control form-control-sm" type="file" name="image" id="formFileMultiple" multiple />
								</div>
							</div>
							<div class="col-sm-2">
								<img src="<?= base_url('assets/img/avatars/') . base64_decode($user->image) ?>" class="rounded img-load">
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label" for="basic-icon-default-company">Nama Perusahaan</label>
					<div class="col-sm-10">
						<div class="input-group input-group-merge">
							<span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
							<input type="text" id="basic-icon-default-company" name="nama_perusahaan" class="form-control form-control-sm" value="<?= $user->nama_perusahaan ?>" aria-describedby="basic-icon-default-company2" />
						</div>
						<?= form_error('nama_perusahaan', '<small class="text-danger ps-2">', '</small>') ?>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
					<div class="col-sm-10">
						<div class="input-group input-group-merge">
							<span class="input-group-text"><i class="bx bx-envelope"></i></span>
							<input type="text" id="basic-icon-default-email" name="email" class="form-control form-control-sm" value="<?= $user->email ?>" aria-describedby="basic-icon-default-email2" readonly />
							<span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
					<div class="col-sm-10">
						<div class="input-group input-group-merge">
							<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
							<input type="text" id="basic-icon-default-phone" name="phone" class="form-control form-control-sm phone-mask" value="<?= $user->phone ?>" aria-describedby="basic-icon-default-phone2" />
						</div>
						<?= form_error('phone', '<small class="text-danger ps-2">', '</small>') ?>
					</div>
				</div>
				<div class="row justify-content-end">
					<div class="col-sm-10 text-end">
						<button type="submit" class="btn btn-sm btn-warning">Edit</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
