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
                                    <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambah_produk">Tambah</button>
                                </div>
                                <div class="p-1">
                                    <button class="btn btn-sm btn-primary" type="button">Export</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <form action="<?= base_url('produk/produk_list/') ?>" class="d-flex pt-1" role="search" method="GET">
                                <input class="form-control form-control-sm me-2" type="search" name="keyword" value="<?= $keyword; ?>" placeholder="Search" aria-label="Search">
                                <button class="btn btn-sm btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-striped-columns">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th class="fw-bold align-middle">No. </th>
                                        <th class="fw-bold align-middle">kode Produk</th>
                                        <th class="fw-bold align-middle">Nama Produk</th>
                                        <th class="fw-bold align-middle">Jenis Produk</th>
                                        <th class="fw-bold align-middle">Merk Produk</th>
                                        <th class="fw-bold align-middle">Harga Produk</th>
                                        <th class="fw-bold align-middle">Deskripsi Produk</th>
                                        <th class="fw-bold align-middle">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php foreach ($produk->result() as $p) : ?>
                                        <tr>
                                            <!-- <td><?= ++$start; ?></td> -->
                                            <td><?= $p->id; ?></td>
                                            <td><?= $p->kode_produk; ?></td>
                                            <td><?= $p->nama_produk; ?></td>
                                            <td><?= $p->jenis_produk; ?></td>
                                            <td><?= $p->merk_produk; ?></td>
                                            <td><?= $p->harga_produk; ?></td>
                                            <td><?= $p->deskripsi_produk; ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <!-- Button trigger modal -->
                                                        <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#modal_edit<?= $p->id; ?>"><i class="bx bx-edit-alt me-2"></i>Edit</a>
                                                        <a id="btn-hapus" class="dropdown-item btn-hapus" href="" data-id="<?= $p->id; ?>" data-nama="<?= $p->nama_produk; ?>" data-kode="<?= $p->kode_produk; ?>"><i class="bx bx-trash me-2"></i> Delete</a>
                                                    </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between">
                            <ul>
                                <p class="mt-2">
                                    <?= "Showing " . $from_row . " to " . $to_row . " of " . $total_rows . " entries" ?>
                                </p>
                            </ul>
                            <ul>
                                <p class="mt-2">
                                    <?= $pagination; ?>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Tambah -->
        <div class="modal fade" id="tambah_produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        <!-- Modal Edit-->
        <?php
        foreach ($produk->result() as $p) :
            $id_produk = $p->id;
            $kode_produk = $p->kode_produk;
            $nama_produk = $p->nama_produk;
            $jenis_produk = $p->jenis_produk;
            $merk_produk = $p->merk_produk;
            $harga_produk = $p->harga_produk;
            $deskripsi_produk = $p->deskripsi_produk;
        ?>
            <div class="modal fade" id="modal_edit<?= $id_produk; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?= form_open_multipart('produk/edit/'); ?>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Kode Produk</label>
                                <div class="col-sm">
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="kode_produk" class="form-control form-control-sm" id="basic-icon-default-fullname" value="<?= $kode_produk; ?>" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                    <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Nama Produk</label>
                                <div class="col-sm">
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="nama_produk" class="form-control form-control-sm" id="basic-icon-default-fullname" value="<?= $nama_produk; ?>" aria-describedby="basic-icon-default-fullname2" placeholder="" />
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
                                        <input type="text" name="merk_produk" class="form-control form-control-sm" id="basic-icon-default-fullname" value="<?= $merk_produk; ?>" aria-describedby="basic-icon-default-fullname2" placeholder="" />
                                    </div>
                                    <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Harga</label>
                                <div class="col-sm">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="basic-icon-default-fullname" name="harga" class="form-control form-control-sm" value="<?= $harga_produk; ?>" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Deskripsi Produk</label>
                                <div class="col-sm">
                                    <div class="input-group input-group-merge">
                                        <textarea class="form-control form-control-sm" name="deskripsi_produk" id="deskripsi_produk" rows="6" placeholder=""><?= $deskripsi_produk; ?></textarea>
                                    </div>
                                    <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-sm btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- / Content -->

    <script>
        // $(document).ready(function(){
        //     const tombol_hapus = $('#btn-hapus');
        //     tombol_hapus.on('click', function(){
        //         alert('oke');
        //     })
        // if (button_hapus) {
        //     Swal.fire({
        //         title: "Are you sure?",
        //         text: "You won't be able to revert this!",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#3085d6",
        //         cancelButtonColor: "#d33",
        //         confirmButtonText: "Yes, delete it!"
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             Swal.fire({
        //                 title: "Deleted!",
        //                 text: "Your file has been deleted.",
        //                 icon: "success"
        //             });
        //         }
        //     });
        // }
        // });
    </script>