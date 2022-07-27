<div class="row">
    <div class="col">
        <h4 class="spanduk mb-4"><marquee class="mx-3"> Aplikasi sarana prasarana | Menyediakan informasi mengenai data kendaraan dan perlengkapan pada kantor pemadam kebakaran secara aktual | Developed By Bramudiaz Aloy Farera</marquee></h4>
    </div>
</div>

<div class="row">
    <style>
        .card-menu{
            height: 150px !important;
        }
    </style>
    <div class="col-4 mb-4">
        <div class="card card-menu border-left-primary shadow py-2 pb-5">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-primary text-uppercase mb-1"><h6 class=" font-weight-bolder ">Total kendaraan</h6></div>
                        <div class="mb-0 font-weight-bold text-gray-800"><h1><?= $kendaraan; ?></h1></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-car fa-3x text-gray-300 pt-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 mb-4">
        <div class="card card-menu border-left-success shadow py-2 pb-5">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-success text-uppercase mb-1"><h6 class=" font-weight-bolder ">Total Perlengkapan</h6></div>
                        <div class="mb-0 font-weight-bold text-gray-800"><h1><?= $tools; ?></h1></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tools fa-3x text-gray-300 pt-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 mb-4">
        <div class="card card-menu border-left-info shadow py-2 pb-5">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-info text-uppercase mb-1"><h6 class=" font-weight-bolder ">Total User</h6></div>
                        <div class="mb-0 font-weight-bold text-gray-800"><h1><?= $user; ?></h1></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-3x text-gray-300 pt-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <!-- Area Chart -->
    <div class="col-6">
        <div class="card shadow ">
            
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white">Informasi </h6>
            </div>

            <!-- Card Body -->
            <div class="card-body text-center">
            <img src="<?= base_url('assets/img/logo.png'); ?>" class="gambar mx-auto d-block mb-3" alt="">
            <span class="font-weight-bold text-center mb-3" style="font-size: 25px;"> Aplikasi sarana prasarana </span>
                <p class="text-justify mt-3 text-indent" style="text-indent: 35px;">
                    Aplikasi ini dibuat untuk membantu tim pemadam kebakaran dalam menyatat data kendaraan dan  data perlengkapan yang digunakan untuk menjalankan tugas sebagai tim pemadam kebakaran.
                </p>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class=" col-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white">Diagram kondisi perlengkapan</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="myPieChart" width="302" height="245" class="chartjs-render-monitor" style="display: block; width: 302px; height: 245px;"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> <?= $memadai['memadai']; ?> Memadai
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-danger"></i> <?= $tdk_memadai['tidak_memadai']; ?> Tidak memadai
                    </span>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- <div class="row">
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header bg-warning py-3">
                <h6 class="m-0 font-weight-bold text-white text-center">Stok Barang Minimum</h6>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 text-center table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Barang</th>
                            <th>Stok</th>
                            <th>Pasok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($barang_min) :
                            foreach ($barang_min as $b) :
                                ?>
                                <tr>
                                    <td><?= $b['nama_barang']; ?></td>
                                    <td><?= $b['stok']; ?></td>
                                    <td>
                                        <a href="<?= base_url('barangmasuk/add/') . $b['id_barang'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3" class="text-center">
                                    Tidak ada barang stok minim
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header bg-success py-3">
                <h6 class="m-0 font-weight-bold text-white text-center">5 Transaksi Terakhir Barang Masuk</h6>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-sm table-striped text-center">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Barang</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transaksi['barang_masuk'] as $tbm) : ?>
                            <tr>
                                <td><strong><?= $tbm['tanggal_masuk']; ?></strong></td>
                                <td><?= $tbm['nama_barang']; ?></td>
                                <td><span class="badge badge-success"><?= $tbm['jumlah_masuk']; ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header bg-danger py-3">
                <h6 class="m-0 font-weight-bold text-white text-center">5 Transaksi Terakhir Barang Keluar</h6>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-sm table-striped text-center">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Barang</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transaksi['barang_keluar'] as $tbk) : ?>
                            <tr>
                                <td><strong><?= $tbk['tanggal_keluar']; ?></strong></td>
                                <td><?= $tbk['nama_barang']; ?></td>
                                <td><span class="badge badge-danger"><?= $tbk['jumlah_keluar']; ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> -->