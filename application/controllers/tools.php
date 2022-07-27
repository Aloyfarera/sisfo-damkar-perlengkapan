<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tools extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    // Fungsi tampil data perlengkapan
    public function index()
    {
        $data['title'] = "Perlengkapan";
        $data['alat'] = $this->admin->getAll('alat');
        $this->template->load('templates/dashboard', 'tools/data', $data);
    }

    // Fungsi tambah data perlengkapan
    public function tambah(){
        $this->form_validation->set_rules('nama','Nama Perlengkapan','required'); 
        $this->form_validation->set_rules('jumlah','Jumlah Perlengkapan','required'); 

        if( $this->form_validation->run() == FALSE)
        {
            $data['title'] = "Perlengkapan";
            $this->template->load('templates/dashboard', 'tools/tambah', $data);
        } 
        else
        {
            $this->admin->tambah_perlengkapan();
            $this->session->set_flashdata('pesan','ditambahkan');
            redirect('tools'); 
        }   
    }

    // Fungsi edit data perlengkapan
    public function edit($id)
    {
        $this->form_validation->set_rules('nama','Nama Perlengkapan','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if( $this->form_validation->run() == FALSE)
        {
            $data['title'] = 'Perlengkapan';
            $data['alat'] = $this->admin->detail_alat($id);
            $this->template->load('templates/dashboard', 'tools/edit', $data);
        } 
        else 
        {
            $this->admin->edit_perlengkapan();
            $this->session->set_flashdata('pesan','diedit');
            redirect('tools'); 
        }
    }

    // Hapus data perlengkapan
    public function hapus($id)
    {
        $this->admin->hapus_perlengkapan($id); 
        $this->session->set_flashdata('pesan','dihapus');
        redirect('tools'); 
    }


    public function get_kondisi()
    {
        $nama = $this->input->post('nama');
        $data = $this->admin->get_kondisi($nama);
        foreach ($data as $row) {
            $d = ''. $row->jumlah .'';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($d));
    }




    // public function alat($id)
    // {
    //         $data['title'] = "Perlengkapan";
    //         $data['perlengkapan'] = $this->admin->get_detail($id);
    //         $this->template->load('templates/dashboard', 'perlengkapan/detail', $data);

    // }

    // private function _validasi()
    // {
    //     $this->form_validation->set_rules('id_kendaraan', 'nomor_polisi', 'required|trim');
    //     $this->form_validation->set_rules('no_lbg', 'no_lambung', 'required|trim|numeric');
    //     $this->form_validation->set_rules('alat', 'Alat', 'required|trim');
    // }

    // public function add()
    // {
    //     $this->_validasi();
    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = "Perlengkapan";
    //         $this->template->load('templates/dashboard', 'perlengkapan/add', $data);
    //     } else {
    //         $input = $this->input->post(null, true);
    //         $save = $this->admin->insert('perlengkapan', $input);
    //         if ($save) {
    //             set_pesan('data berhasil disimpan.');
    //             redirect('perlengkapan');
    //         } else {
    //             set_pesan('data gagal disimpan', false);
    //             redirect('perlengkapan/add');
    //         }
    //     }
    // }


    // public function edit($getId)
    // {
    //     $id = encode_php_tags($getId);
    //     $this->_validasi();

    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = "Perlengkapan";
    //         $data['perlengkapan'] = $this->admin->get('perlengkapan', ['id_kendaraan' => $id]);
    //         $this->template->load('templates/dashboard', 'perlengkapan/edit', $data);
    //     } else {
    //         $input = $this->input->post(null, true);
    //         $update = $this->admin->update('perlengkapan', 'id_kendaraan', $id, $input);

    //         if ($update) {
    //             set_pesan('data berhasil diedit.');
    //             redirect('perlengkapan');
    //         } else {
    //             set_pesan('data gagal diedit.');
    //             redirect('perlengkapan/edit/' . $id);
    //         }
    //     }
    // }

    // public function delete($getId)
    // {
    //     $id = encode_php_tags($getId);
    //     if ($this->admin->delete('perlengkapan', 'id_perlengkapan', $id)) {
    //         set_pesan('data berhasil dihapus.');
    //     } else {
    //         set_pesan('data gagal dihapus.', false);
    //     }
    //     redirect('perlengkapan');
    // }

    // public function detail($getId)
    // {
    //     $id = encode_php_tags($getId);
    //     $this->_validasi();

    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = "Perlengkapan";
    //         $data['perlengkapan'] = $this->admin->get('perlengkapan', ['id_kendaraan' => $id]);
    //         $this->template->load('templates/dashboard', 'perlengkapan/detail', $data);
    //     } 
    // }
}
