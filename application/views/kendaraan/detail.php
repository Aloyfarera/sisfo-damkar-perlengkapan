<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Detail Data Kendaraan
                </h4>
            </div>
            <div class="col-1 ">
                <a href="<?= base_url('kendaraan/edit/').$kendaraan['id_kendaraan'] ?>" type="submit" class="btn btn-sm btn-warning btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-edit"></i>
                    </span>
                    <span class="text">
                        Edit
                    </span>
                </a>
            </div>
            <div class="col-1 mr-5">
                <button type="submit" class="btn btn-sm btn-primary btn-icon-split" onclick="printJS({printable:  'detailKendaraan', type: 'html'})">
                    <span class="icon">
                        <i class="fa fa-print"></i>
                    </span>
                    <span class="text">
                        Print
                    </span>
                </button>
            </div>
            <div class="col-1">
                <a href="<?= base_url('kendaraan') ?>" class="btn btn-sm btn-success btn-icon-split float-right">
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
    <div class="table-responsive" id="detailKendaraan">
    <!-- <button type="button" id="print">
    Print Form
    </button> -->
    <div class="container">
            <h2 class="text-center">Laporan Detail Kendaraan</h2>
        <div class="row">
            <div class="col-6">    
                <table class="table dt-responsive border-1 mx-auto"  style="border: 1px solid #e3e6f0 !important;">
                    <tr >
                        <th colspan="3" class="text-center mb-2">
                            Detail kendaraan
                        </th>
                    </tr>
                    <tr>
                        <td class="pl-5" width="200" style="padding-left: 130px;">Jenis Kendaraan</td>
                        <td width="50">:</td>
                        <td class="text-left"><?= $kendaraan['jns_kendaraan'] ?></td>
                    </tr>
                    <tr>
                        <td class="pl-5" style="padding-left: 130px;" width="" >Merk Kendaraan</td>
                        <td>:</td>
                        <td class="text-left"><?= $kendaraan['merk'] ?></td>
                    </tr>
                    <tr>
                        <td class="pl-5" style="padding-left: 130px;" >No Polisi</td>
                        <td>:</td>
                        <td class="text-left"><?= $kendaraan['no_polisi'] ?></td>
                    </tr>
                    <tr>
                        <td class="pl-5" style="padding-left: 130px;" >No Lambang</td>
                        <td>:</td>
                        <td class="text-left"><?= $kendaraan['no_lbg'] ?></td>
                    </tr>
                    <tr>
                        <td class="pl-5" style="padding-left: 130px;" >Tahun Pembuatan</td>
                        <td>:</td>
                        <td class="text-left"><?= $kendaraan['thn_pembuatan'] ?></td>
                    </tr>
                    <tr>
                        <td class="pl-5" style="padding-left: 130px;" >Warna Kendaraan</td>
                        <td>:</td>
                        <td class="text-left"><?= $kendaraan['warna'] ?></td>
                    </tr>
                    <tr>
                        <td class="pl-5" style="padding-left: 130px;" >Bahan Bakar</td>
                        <td>:</td>
                        <td class="text-left"><?= $kendaraan['bahan_bakar'] ?></td>
                    </tr>
                    <tr>
                        <td class="pl-5" style="padding-left: 130px;" >No BPKB</td>
                        <td>:</td>
                        <td class="text-left"><?= $kendaraan['no_bpkb'] ?></td>
                    </tr>
                    <tr>
                        <td class="pl-5" style="padding-left: 130px;" >No Rangka</td>
                        <td>:</td>
                        <td class="text-left"><?= $kendaraan['no_rangka'] ?></td>
                    </tr>
                    <tr>
                        <td class="pl-5" style="padding-left: 130px;" >Asal Kendaraan</td>
                        <td>:</td>
                        <td class="text-left"><?= $kendaraan['asal_kendaraan'] ?></td>
                    </tr>
                    <tr>
                        <td class="pl-5" style="padding-left: 130px;" >Kondisi Kendaraan</td>
                        <td>:</td>
                        <td class="text-left"><?= $kendaraan['kondisi_kndrn'] ?></td>
                    </tr>
                </table> <br>
            </div>
            <div class="col-6">    
                <table class="table" style="border: 1px solid #e3e6f0 !important;">
                    <tr>
                        <th colspan="3" class="text-center mb-2">
                            Perlengkapan yang kurang
                        </th>
                    </tr>
                    <tr>
                    <?php  if ($tools) : 
                        foreach( $tools as $t) : ?>
                            <td class="pl-5" width="200" style="padding-left: 130px;" ><?= $t['nama_tools']; ?></td>
                            <td width="50">:</td>
                            <td class="text-left" width="160"><?= $t['kondisi_ideal'] ?></td>
                        <?php endforeach; ?>
                    <?php else : ?>
                    <tr>
                        <td colspan="3" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                    <?php endif; ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>