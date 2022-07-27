<div class="row justify-content-center">
    <div class="col-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Edit Perlengkapan
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('kendaraan') ?>" class="btn btn-sm btn-success btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>
                <input value="<?= $tools['id_kendaraan']; ?>" name="id_kendaraan" id="id_kendaraan" type="hidden" class="form-control" required>
                <input value="<?= $tools['kode_kendaraan']; ?>" name="kode_kendaraan" id="kode_kendaraan" type="hidden" class="form-control" placeholder="Nama Tools" required>
                <input value="<?= $tools['id_tools']; ?>" name="id_tools" id="id_tools" type="hidden" class="form-control" placeholder="Nama Tools" required>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="nama_tools">Nama Perlengkapan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-tools"></i></span>
                            </div>
                            <input value="<?= $tools['nama_tools']; ?>" name="nama_tools" id="nama_tools" type="text" class="form-control" placeholder="Nama Tools" readonly>
                        </div>
                        <?= form_error('nama_tools', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="kondisi_real">Kondisi Real</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-file"></i></span>
                            </div>
                            <input value="<?= $tools['kondisi_real']; ?>" name="kondisi_real" id="kondisi_real" type="text" class="form-control" placeholder="Kondisi Real" required>
                        </div>
                        <?= form_error('kondisi_real', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="kondisi_ideal">Kondisi ideal</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-file"></i></span>
                            </div>
                            <input value="<?= $tools['kondisi_ideal']; ?>" name="kondisi_ideal" id="kondisi_ideal" type="text" class="form-control" placeholder="Kondisi Ideal"  readonly>
                        </div>
                        <?= form_error('kondisi_ideal', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="keterangan">Keterangan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-comment"></i></span>
                            </div>
                            <input value="<?= $tools['keterangan']; ?>" name="keterangan" id="keterangan" type="text" class="form-control" placeholder="keterangan" readonly>
                        </div>
                        <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
