<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Tambah Data Perlengkapan
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('tools') ?>" class="btn btn-sm btn-success btn-icon-split">
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

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="nama"> Nama Perlengkapan </label></label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="nama" id="nama" 
                            type="text" class="form-control" placeholder="Nama Perlengkapan" required>
                        </div>
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="jumlah">Jumlah</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="jumlah" id="jumlah" type="number" class="form-control" placeholder="jumlah Perlengkapan" required>
                        </div>
                        <?= form_error('jumlah', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
