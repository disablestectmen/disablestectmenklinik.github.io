<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <!-- <div class="card-header d-flex justify-content-between align-items-center">
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
                    </div> -->
                    <div class="card-body">
                        <div id="reload">
                            <table id="myData" class="table table-responsive table-striped-columns">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Harga Satuan</th>
                                        <th>Total Produk</th>
                                        <th>Total Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="show_data">
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
                        <input type="text" name="id_edit" class="d-none">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Kode Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="kode_edit" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Nama Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="nama_edit" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" placeholder="" />
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Harga Satuan</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="harga_satuan_edit" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" placeholder="" />
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Harga Satuan</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="harga_satuan_edit" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" placeholder="" />
                                </div>
                                <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Total Produk</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-icon-default-fullname" name="total_produk_edit" class="form-control form-control-sm" value="" aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Total Harga</label>
                            <div class="col-sm">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-icon-default-fullname" name="total_harga_edit" class="form-control form-control-sm" value="" aria-describedby="basic-icon-default-fullname2" />
                                </div>
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
    <script type="text/javascript">
        $(document).ready(function() {

            tampil_data(); //pemanggilan fungsi tampil barang.



            /** fungsi tampil barang dari database */
            function tampil_data() {
                $.ajax({
                    type: 'GET',
                    url: '<?= base_url('produk/penjualan_list') ?>',
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        let html = '';
                        let i;
                        // Menghitung nomor urut
                        for (i = 0; i < data.length; i++) {
                            let nomorUrut = i + 1;
                            // let gender = data[i].gender == 1 ? 'Pria' : 'Wanita';
                            html += '<tr>' +
                                '<td>' + nomorUrut + '</td>' +
                                '<td>' + data[i].kode_produk + '</td>' +
                                '<td>' + data[i].nama_produk + '</td>' +
                                '<td>' + data[i].harga_satuan + '</td>' +
                                '<td>' + data[i].total_produk + '</td>' +
                                '<td>' + data[i].total_harga + '</td>' +
                                '<td style="text-align:right;">' +
                                '<a href="javascript:;" class="btn  btn-xs btn-info item_edit" data-id_list="' + data[i].id + '" data-jenis_kelamin="' + data[i].gender + '">Edit</a>' + ' ' +
                                '<a href="javascript:;" class="btn  btn-xs btn-danger item_hapus" data="' + data[i].id + '">Hapus</a>' +
                                '</td>' +
                                '</tr>';
                        }
                        $('#show_data').html(html);

                        // Inisialisasi DataTable dengan opsi konfigurasi
                        $('#myData').dataTable({
                            "paging": true, // Aktifkan pagination
                            "lengthChange": true, // Nonaktifkan pengaturan jumlah data per halaman
                            "searching": true, // Nonaktifkan fitur pencarian
                            "info": true, // Aktifkan informasi jumlah data
                            "autoWidth": true // Nonaktifkan penyesuaian otomatis lebar kolom
                        });
                    }

                });
            }

            /** get update */
            $('#show_data').on('click', '.item_edit', function() {
                let id = $(this).data('id_list');
                // let kelamin = $(this).data('jenis_kelamin')
                $.ajax({
                    type: "GET",
                    url: '<?= base_url('produk/get_penjualan_list_by_id') ?>',
                    dataType: "JSON",
                    data: {
                        // id_produk (untuk ke controllernya ): id(diambil dari let id diatas)
                        id_produk: id
                        // jenis_kelamin: kelamin
                    },
                    success: function(data) {
                        $.each(data, function(id) {
                            $('#edit-penjualan').modal('show');
                            $('[name="id_edit"]').val(data.id);
                            $('[name="kode_edit"]').val(data.kode_produk);
                            $('[name="nama_edit"]').val(data.nama_produk);
                            $('[name="harga_satuan_edit"]').val(data.harga_satuan);
                            $('[name="total_produk_edit"]').val(data.total_produk);
                            $('[name="total_harga_edit"]').val(data.total_harga);
                        });
                    }
                });
                return false;
            });

        });
    </script>