<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Perlengkapan
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('perlengkapan/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Perlengkapan
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Kendaraan</th>
                    <th>Nomor Polisi</th>
                    <th>Nomor Lambung</th>
                    <th>Nama Alat</th>
                    <th>Kondisi Real</th>
                    <th>Kondisi Ideal</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($perlengkapan) :
                    $no = 1;
                    foreach ($perlengkapan as $s) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s['id_kendaraan']; ?></td>
                            <td><?= $s['no_polisi']; ?></td>
                            <td><?= $s['no_lbg']; ?></td>
                            <td><?= $s['alat']; ?></td>
                            <td><?= $s['kondisi_real']; ?></td>
                            <td><?= $s['kondisi_ideal']; ?></td>
                            <td><?= $s['keterangan']; ?></td>
                            <th>
                                <a href="<?= base_url('perlengkapan/edit/') . $s['id_kendaraan'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('perlengkapan/delete/') . $s['id_kendaraan'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('perlengkapan/alat/') . $s['id_kendaraan'] ?>" class="btn btn-circle btn-success btn-sm"><i class="fas fa-share-square fa-fw"></i></i></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>