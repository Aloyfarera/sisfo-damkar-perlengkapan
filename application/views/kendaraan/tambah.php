<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Tambah Data Kendaraan
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

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="jns_kendaraan">Jenis Kendaraan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="jns_kendaraan" id="jns_kendaraan" 
                            type="text" class="form-control" placeholder="Jenis Kendaraan" required>
                        </div>
                        <?= form_error('jns_kendaraan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="merk">Merk Kendaraan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="merk" id="merk" type="text" class="form-control" placeholder="Merk Kendaraan" required>
                        </div>
                        <?= form_error('merk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="no_polisi">Nomor Polisi</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="no_polisi" id="no_polisi" type ="text" class="form-control"  placeholder="Nomor Polisi" required>
                        </div>
                        <?= form_error('no_polisi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="no_lbg">Nomor Lambung</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="no_lbg" id="no_lbg" type="text" class="form-control" placeholder="Nomor Lambung" required>
                        </div>
                        <?= form_error('no_lbg', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="thn_pembuatan">Tahun Pembuatan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="thn_pembuatan" id="thn_pembuatan" type="date" class="form-control" placeholder="Tahun Pembuatan" required>
                        </div>
                        <?= form_error('thn_pembuatan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="warna">Warna Kendaraan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="warna" id="warna" type="text" class="form-control" placeholder="Warna Kendaraan" required>
                        </div>
                        <?= form_error('warna', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="bahan_bakar">Bahan Bakar</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <!-- <input value="" name="bahan_bakar" id="bahan_bakar" type="text" class="form-control" placeholder="Bahan Kendaraan"> -->
                            <select class="form-control" id="bahan_bakar" name="bahan_bakar" required>
                                <option>Bahan bakar</option>
                                <option value="pertalite">Pertalite</option>
                                <option value="solar">Solar</option>
                                <option value="premium">Premium</option>
                                <option value="dexlite">Dex lite</option>
                                <option value="pertamax">Pertamax</option>
                            </select>
                        </div>
                        <?= form_error('bahan_bakar', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="no_bpkb">Nomor BPKB</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="no_bpkb" id="no_bpkb" type="text" class="form-control" placeholder="Nomor BPKB" required>
                        </div>
                        <?= form_error('no_bpkb', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="no_mesin">Nomor Mesin</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="no_mesin" id="no_mesin" type="text" class="form-control" placeholder="Nomor Mesin" required>
                        </div>
                        <?= form_error('no_mesin', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                
                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="no_rangka">Nomor Rangka</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="no_rangka" id="no_rangka" type="text" class="form-control" placeholder="Nomor Rangka" required>
                        </div>
                        <?= form_error('no_rangka', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="asal_kendaraan">Asal Kendaraan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="asal_kendaraan" id="asal_kendaraan" type="text" class="form-control" placeholder="Asal Kendaraan" required>
                        </div>
                        <?= form_error('asal_kendaraan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right pt-1" for="kondisi_kndrn">Kondisi Kendaraan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input value="" name="kondisi_kndrn" id="kondisi_kndrn" type="text" class="form-control" placeholder="Kondisi Kendaraan" required>
                        </div>
                        <?= form_error('kondisi_ideal', '<small class="text-danger">', '</small>'); ?>
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
