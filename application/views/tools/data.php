<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Daftar Perlengkapan
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('tools/tambah') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Perlangkapan
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table w-100 dt-responsive" id="dataPerlengkapan">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <!-- <th>Kondisi Ideal</th>
                    <th>Keterangan</th> -->
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($alat) :
                    $no = 1;
                    foreach ($alat as $t) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $t['nama']; ?></td>
                            <td><?= $t['jumlah']; ?> buah</td>
                            <!-- <td></td>
                            <td></td> -->
                            <td>
                                <a href="<?= base_url('tools/edit/') . $t['id_alat'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('tools/hapus/') . $t['id_alat'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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

<script type="text/javascript">
    // Datatables
        $(document).ready(function() {
            $('#dataTools').DataTable({
                scrollY: '300px',
                buttons: [
                    {
                extend: 'print',
                messageTop: '<?= $detail['jns_kendaraan']; ?> <br> <?= $detail['merk']; ?> <br> <?= $detail['no_polisi']; ?>'
            },
                    'copy', 'csv', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false
                }]
            });
        });
</script>