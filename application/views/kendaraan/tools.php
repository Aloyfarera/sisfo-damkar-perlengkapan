<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Perlengkapan Kendaraan
                </h4>
            </div>
            <div class="col mr-3">
                <a href="<?= base_url('kendaraan/form_tambah_tools/').$detail['id_kendaraan'] ?>" class="float-right btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Perlengkapan
                    </span>
                </a>
            </div>
            <div class="col-1">
                <a href="<?= base_url('kendaraan') ?>" class="float-right btn btn-sm btn-success btn-icon-split">
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
    <table class="table ml-3 table-borderless">
        <tr>
            <th width="150">Jenis Kendaraan</th>
            <th width="20">:</th>
            <th><?= $detail['jns_kendaraan']; ?></th>
        </tr>
        <tr>
            <th width="150">Merk Kendaraan</th>
            <th width="20">:</th>
            <th><?= $detail['merk']; ?></th>
        </tr>
        <tr>
            <th width="150">No Polisi</th>
            <th width="20">:</th>
            <th><?= $detail['no_polisi']; ?></th>
        </tr>
    </table>
    
    <div class="table-responsive">
        <table class="table w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Alat</th>
                    <th>Kondisi Real</th>
                    <th>Kondisi Ideal</th>
                    <th>keterangan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>          
                <?php if ($kendaraan) :
                    $no = 1;
                    foreach ($kendaraan as $k) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $k['nama_tools']; ?></td>
                            <td><?= $k['kondisi_real']; ?></td>
                            <td><?= $k['kondisi_ideal']; ?></td>
                            <td><?= $k['keterangan']; ?></td>
                            <td>
                                <a href="<?= base_url('kendaraan/edit_tools/') . $k['id_tools'] ?>" class="btn rounded-pill btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="<?= base_url('kendaraan/hapus_tools/') . $k['id_tools'] ?>" class="btn rounded-pill btn-danger btn-sm"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
                            </td>
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