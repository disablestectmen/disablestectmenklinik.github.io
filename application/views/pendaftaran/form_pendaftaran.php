<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <?= $this->session->flashdata('message'); ?>
        <!-- Basic with Icons -->
        <div class="col-xl">
            <div class="card mb-4">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <?= form_open_multipart(''); ?>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tanggal Pendaftaran</label>
                                <div class="col-sm">
                                    <div class="input-group input-group-merge">
                                        <input type="date" name="tgl_pendaftaran" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                    <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Pasien</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="nama_pasien" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" placeholder="nama pasien" />
                                    </div>
                                    <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Alamat</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <textarea class="form-control form-control-sm" name="alamat" id="alamat" rows="2" placeholder="jalan panjaitan"></textarea>
                                    </div>
                                    <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label" for="basic-icon-default-company">Jenis Kelamin</label>
                                        <div class="col-sm">
                                            <div class="input-group input-group-merge">
                                                <select class="form-select form-select-sm" name="jenis_kelamin" id="jns_kelamin">
                                                    <option selected>Pilih Jenis Kelamin</option>
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                            </div>
                                            <?= form_error('nama_perusahaan', '<small class="text-danger ps-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label" for="basic-icon-default-company">Status Kawin</label>
                                        <div class="col-sm">
                                            <div class="input-group input-group-merge">
                                                <select class="form-select form-select-sm" name="status_kawin" id="status_kawin" plac>
                                                    <option selected>Pilih Status</option>
                                                    <option value="1">Kawin</option>
                                                    <option value="2">Belum Kawin</option>
                                                    <option value="3">Cerai</option>
                                                </select>
                                            </div>
                                            <?= form_error('nama_perusahaan', '<small class="text-danger ps-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="pekerjaan" class="form-control form-control-sm" id="basic-icon-default-fullname" value="" aria-describedby="basic-icon-default-fullname2" placeholder="Pegawai Negeri Sipil" />
                                    </div>
                                    <?= form_error('name', '<small class="text-danger ps-2">', '</small>') ?>
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
                                <div class="col">
                                    <div class="row">
                                        <label class="col-sm-4 form-label" for="basic-icon-default-phone">No KTP</label>
                                        <div class="col-sm">
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="basic-icon-default-phone" name="no_ktp" class="form-control form-control-sm phone-mask" value="" aria-describedby="basic-icon-default-phone2" placeholder="658 799 894 222" />
                                            </div>
                                            <?= form_error('phone', '<small class="text-danger ps-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <label class="col-sm-4 form-label" for="basic-icon-default-phone">No HP</label>
                                        <div class="col-sm">
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="basic-icon-default-phone" name="phone" class="form-control form-control-sm phone-mask" value="" aria-describedby="basic-icon-default-phone2" placeholder="658 799 8940" />
                                            </div>
                                            <?= form_error('phone', '<small class="text-danger ps-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label" for="basic-icon-default-company">Tempat Lahir</label>
                                        <div class="col-sm">
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="basic-icon-default-company" name="tempat_lahir" class="form-control form-control-sm" value="" aria-describedby="basic-icon-default-company2" placeholder="Yogyakarta" />
                                            </div>
                                            <?= form_error('nama_perusahaan', '<small class="text-danger ps-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label" for="basic-icon-default-company">Tanggal Lahir</label>
                                        <div class="col-sm">
                                            <div class="input-group input-group-merge">
                                                <input type="date" id="basic-icon-default-company" name="tgl_lahir" class="form-control form-control-sm" value="" aria-describedby="basic-icon-default-company2" placeholder="1234567890" />
                                            </div>
                                            <?= form_error('nama_perusahaan', '<small class="text-danger ps-2">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-10 text-center">
                                    <button type="submit" class="col-4 btn btn-sm btn-info">Daftar</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>