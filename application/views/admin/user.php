<div class="container-xxl flex-grow-1 container-p-y">
	<!-- <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4> -->
	<!-- Basic Layout -->
	<!-- Striped Rows -->
	<div class="card">
		<div class="row px-4 pt-3">
			<div class="col">
				<!-- <a href="<?= base_url('admin/input_user'); ?>"><button type="button" class="btn btn-primary btn-sm rounded-1">Tambah Data</button></a> -->
				<button type="button" class="btn btn-sm btn-primary rounded-1" style="font-size: 12px;" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
			</div>
			<div class="col">
				<form action="<?= base_url('user'); ?>" method="POST">
					<div class="input-group mb-3">
						<input type="text" class="form-control form-control-sm" style="font-size: 12px;" placeholder="Search" value="<?= $keyword ? $keyword : ''; ?>" name='keyword' autocomplete="off">
						<div class="input-group-append">
							<input class="btn btn-primary btn-sm rounded-0" style="font-size: 12px;" type="submit">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="table-responsive text-nowrap">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Karyawan</th>
						<th>Salary</th>
						<th>Jenis Kelamin</th>
						<th>Users</th>
						<th>Email</th>
						<th>Kota</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					<?php foreach ($users as $u) : ?>
						<tr>
							<td style="width: 60px; font-size: 12px;"><?= ++$start; ?></td>
							<td>
								<span class="fw-medium"><?= $u->emp_name ?></span>
							</td>
							<td><?= number_format($u->salary) ?></td>
							<td><?= $u->gender ?></td>
							<td>
								<ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
									<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
										<img src="<?= base_url() ?>/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
									</li>
									<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
										<img src="<?= base_url() ?>/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
									</li>
									<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
										<img src="<?= base_url() ?>/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
									</li>
								</ul>
							</td>
							<td><?= $u->email ?></td>
							<td><?= $u->city ?></td>
							<td><span class="badge bg-label-primary me-1">Active</span></td>
							<td>
								<div class="dropdown">
									<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
										<i class="bx bx-dots-vertical-rounded"></i>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
										<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="d-flex justify-content-between pt-4">
			<ul class="ps-4">
				<p class="mt-2"><?php echo "Showing " . $from_row . " to " . $to_row . " of " . $total_rows . " entries" ?></p>
			</ul>
			<ul class="pe-4">
				<?= $pagination; ?>
			</ul>
		</div>
	</div>
</div>
<!--/ Striped Rows -->
