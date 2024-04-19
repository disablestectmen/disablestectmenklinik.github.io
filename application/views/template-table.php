<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="col-5">
                            <div class="d-flex">
                                <div class="p-1">
                                    <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambah-penjualan">Tambah</button>
                                </div>
                                <div class="p-1">
                                    <button class="btn btn-sm btn-primary" type="button">Export</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <form class="d-flex pt-1" role="search">
                                <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-sm btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-striped-columns">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <td class="align-middle">No.</td>
                                        <td class="fw-bold align-middle">Nama Barang</td>
                                        <td class="fw-bold align-middle">Deskripsi</td>
                                        <td class="fw-bold align-middle">Harga</td>
                                        <td class="fw-bold align-middle">Status</td>
                                        <td class="fw-bold align-middle">Action</td>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0 text-center">
                                    <tr>
                                        <th class="align-middle" scope="row">1</th>
                                        <td class="align-middle">Mark</td>
                                        <td class="align-middle">Otto</td>
                                        <td class="align-middle">Rp 20.000</td>
                                        <td class="align-middle"><span class="badge bg-label-success me-1">Active</span></td>
                                        <td class="align-middle">
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <!-- Button trigger modal -->
                                                    <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#edit-penjualan"><i class="bx bx-edit-alt me-2"></i>Edit</a>
                                                    <a id="btn-hapus-penjualan" class="dropdown-item btn-hapus-penjualan" href="" data-id="" data-nama="" data-kode=""><i class="bx bx-trash me-2"></i> Delete</a>
                                                </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Tambah -->
        <div class="modal fade" id="tambah-penjualan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart(''); ?>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Kode Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="kode_produk" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Nama Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="nama_produk" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" placeholder="" />
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Jenis Produk</label>
                                    <div class="col-sm">
                                        <div class="input-group input-group-merge">
                                            <select class="form-select form-select-sm" name="jenis_produk" id="jenis_produk">
                                                <option selected>Pilih Jenis Produk</option>
                                                <option value="1">Pelembab</option>
                                                <option value="2">Sunscreen</option>
                                            </select>
                                        </div>
                                        <?= form_error('nama_perusahaan', '<small class="text-danger ps-2">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Merk Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="merk_produk" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" placeholder="" />
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Harga</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-icon-default-fullname" name="harga" class="form-control form-control-sm" value="" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Deskripsi Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <textarea class="form-control form-control-sm" name="deskripsi_produk" id="deskripsi_produk" rows="6" placeholder=""></textarea>
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary">Tambah Produk</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit -->
        <div class="modal fade" id="edit-penjualan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart(''); ?>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Kode Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="kode_produk" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Nama Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="nama_produk" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" placeholder="" />
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Jenis Produk</label>
                                    <div class="col-sm">
                                        <div class="input-group input-group-merge">
                                            <select class="form-select form-select-sm" name="jenis_produk" id="jenis_produk">
                                                <option selected>Pilih Jenis Produk</option>
                                                <option value="1">Pelembab</option>
                                                <option value="2">Sunscreen</option>
                                            </select>
                                        </div>
                                        <?= form_error('nama_perusahaan', '<small class="text-danger ps-2">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Merk Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="merk_produk" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" placeholder="" />
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Harga</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-icon-default-fullname" name="harga" class="form-control form-control-sm" value="" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Deskripsi Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <textarea class="form-control form-control-sm" name="deskripsi_produk" id="deskripsi_produk" rows="6" placeholder=""></textarea>
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary">Tambah Produk</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->