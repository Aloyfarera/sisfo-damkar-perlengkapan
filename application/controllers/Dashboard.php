<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['kendaraan'] = $this->admin->count('kendaraan');
        $data['tools'] = $this->admin->count('tools');
        $data['user'] = $this->admin->count('user');
        $data['memadai'] = $this->admin->memadai('tools');
        $data['tdk_memadai'] = $this->admin->tidak_memadai('tools');
        // $data['barang_masuk'] = $this->admin->count('barang_masuk');
        // $data['barang_keluar'] = $this->admin->count('barang_keluar');
        // $data['supplier'] = $this->admin->count('supplier');
        // $data['perlengkapan'] = $this->admin->count('perlengkapan');
        // $data['user'] = $this->admin->count('user');
        // $data['stok'] = $this->admin->sum('barang', 'stok');
        // $data['barang_min'] = $this->admin->min('barang', 'stok', 10);
        // $data['transaksi'] = [
        //     'barang_masuk' => $this->admin->getBarangMasuk(5),
        //     'barang_keluar' => $this->admin->getBarangKeluar(5)
        // ];

        // Line Chart
        $bln = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        $data['cbm'] = [];
        $data['cbk'] = [];

        //foreach ($bln as $b) {
        //    $data['cbm'][] = $this->admin->chartBarangMasuk($b);
        //    $data['cbk'][] = $this->admin->chartBarangKeluar($b);
        //}

        $this->template->load('templates/dashboard', 'dashboard', $data);
    }
}
