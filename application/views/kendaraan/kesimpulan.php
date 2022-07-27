<!-- Menampilkan pesan ketika data berhasil ditambahkan -->
<?php if( $this->session->flashdata('pesan') ): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    Data <strong>berhasil</strong> <?= $this->session->flashdata('pesan');?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<!-- Akhir -->

<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Kekurangan
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('kendaraan/tambah') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Kendaraan
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table w-100 dt-responsive nowrap" id="dataKendaraan">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama Perlengkapan</th>
                    <th>Nama Kendaraan</th>
                    <th>No Lambung</th>
                    <th>Kekurangan</th>
                    <!--<th></th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                if ($kesimpulan) :
                    $no = 1;
                    foreach ($kesimpulan as $k) :
                        ?>
                        <tr >
                            <td><?= $no++; ?></td>
                            <td style=""><?= $k['nama_tools']; ?></td>
                            <td style=""><?= $k['jns_kendaraan']; ?></td>
                            <td style="padding-left: 100px;"><?= $k['no_lbg']; ?></td>
                            <td><?= $k['kondisi_real']; ?></td>
                            <!--<td>
                                <a href="<?= base_url('kendaraan/edit/') . $k['id_kendaraan'] ?>" class="btn rounded-pill btn-warning btn-sm"><i class="fas fa-fw fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('kendaraan/hapus/') . $k['id_kendaraan'] ?>" class="btn rounded-pill btn-danger btn-sm"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
                                <a href="<?= base_url('kendaraan/tools/') . $k['id_kendaraan'] ?>" class="btn rounded-pill btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Perlengkapan"><i class="fas fa-tools"></i></a>
                                <a href="<?= base_url('kendaraan/detail/') . $k['id_kendaraan'] ?>" class="btn rounded-pill btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Detail Kendaraan"><i class="fas fa-share-square"></i></a>
                            </td>-->
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
        <script type="text/javascript">
        

        
    </script>
        
    </div>
</div>