<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan extends CI_Controller
{

    // Fungis otomatis memanggil "form_validation" dan "Admin_model"
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }


    // Fungsi menampilkan semua data kendaraan
    public function index()
    {
        $data['title'] = "Kendaraan";
        $data['kendaraan'] = $this->admin->get_all_kndr('kendaraan');
        $this->template->load('templates/dashboard', 'kendaraan/data', $data);
    }


    // Tambah data kendaraan
    public function tambah()
    {
        $this->form_validation->set_rules('jns_kendaraan','Jenis kendaraan','required'); 

        if( $this->form_validation->run() == FALSE)
        {
            $data['title'] = "Kendaraan";
            $this->template->load('templates/dashboard', 'kendaraan/tambah', $data);
        } 
        else
        {
            $this->admin->tambah_kendaraan();
            $this->session->set_flashdata('pesan','ditambahkan');
            redirect('kendaraan'); 
        }
    }

    // Hapus data kendaraan
    public function hapus($id)
    {
        $this->admin->hapus_kendaraan($id); 
        $this->session->set_flashdata('pesan','dihapus');
        redirect('kendaraan'); 
    }


    // Detail data kendaraan
    public function detail($id)
    {
        $data['title'] = "Kendaraan";
        $data['kendaraan'] = $this->admin->detail($id);
        $data['tools'] = $this->admin->tools($id);
        $this->template->load('templates/dashboard', 'kendaraan/detail', $data);
    }


    // Edit data kendaraan
    public function edit($id)
    {
        $this->form_validation->set_rules('jns_kendaraan','Jenis kendaraan','required');

        if( $this->form_validation->run() == FALSE)
        {
            $data['title'] = 'Kendaraan';
            $data['kendaraan'] = $this->admin->detail($id);
            $data['bbm'] = ['pertalite','pertamax','premium','solar','dexlite'];
            $this->template->load('templates/dashboard', 'kendaraan/edit', $data);
        } 
        else 
        {
            $this->admin->edit_kendaraan($id);
            $this->session->set_flashdata('pesan','diedit');
            redirect('kendaraan'); 
        }
    }

    //Data kesimpulan
    public function kesimpulan()
    {
        $data['title'] = 'Data kekurangan';
        $data['kesimpulan'] = $this->admin->kesimpulan();
        $this->template->load('templates/dashboard', 'kendaraan/kesimpulan', $data);
    }


    // Detail perlengkapan pada kendaraan
    public function tools($id)
    {
        $data['title'] = "Kendaraan";
        $data['detail'] = $this->admin->detail($id);
        $data['kendaraan'] = $this->admin->tools($id);
        $this->template->load('templates/dashboard_tools', 'kendaraan/tools', $data);

    }


    // Tambah perlengkapan
    public function form_tambah_tools($id)
    {
        $this->form_validation->set_rules('nama_tools','Nama Tools','required'); 
        $this->form_validation->set_rules('kondisi_real','Kondisi Real','required|numeric'); 
        $this->form_validation->set_rules('kondisi_ideal','kondisi Real','required|numeric'); 
        $this->form_validation->set_rules('keterangan','Keterangan','required'); 
    
    
        if( $this->form_validation->run() == FALSE) 
        {
            $data['title'] = 'Tambah Perlengkapan';
            $data['kendaraan'] = $this->admin->detail($id); 
            $data['alat'] = $this->admin->getAll('alat');
            $this->template->load('templates/dashboard', 'kendaraan/form_tambah_tools', $data);
        } 
        else
        {
            $this->admin->tambah_tools(); 
            $this->session->set_flashdata('pesan','ditambahkan'); 
            redirect('kendaraan'); 
        }
    }

    // Hapus perlengkapan
    public function hapus_tools($id){
        $this->admin->hapus_tools($id); 
        $this->session->set_flashdata('pesan','dihapus');
        redirect('kendaraan'); 
    }


    // Edit data perlengkapan
    public function edit_tools($id)
    {
        $this->form_validation->set_rules('nama_tools','Nama Tools','required');

        if( $this->form_validation->run() == FALSE)
        {
            $data['title'] = 'Perlengkapan';
            $data['tools'] = $this->admin->detail_tools($id);
            $this->template->load('templates/dashboard', 'kendaraan/form_edit_tools', $data);
        } 
        else 
        {
            $this->admin->edit_tools();
            $this->session->set_flashdata('pesan','diedit');
            redirect('kendaraan'); 
        }
    }


    // public function ubah($id)
    // {

    //     $this->form_validation->set_rules('nama_tools','Nama Tools','required');
    //     if( $this->form_validation->run() == FALSE) 
    //     {
    //         $data['title'] = 'Perlengkapan';
    //         $data['tools'] = $this->admin->detail_tools($id);
    //         $this->template->load('templates/dashboard', 'kendaraan/form_edit_tools', $data);
    //     } 
    //     else
    //     {
    //         $this->admin->ubah_data(); 
    //         $this->session->set_flashdata('pesan','diedit'); 
    //         redirect('kendaraan'); 
    //     }
    // }

    // Tambah kendaraan
    // public function tambah()
    // {
    //     $this->_validasi();
    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = "Kendaraan";
    //         $this->template->load('templates/dashboard', 'kendaraan/tambah', $data);
    //     } else {
    //         $save = $this->admin->tambah_kendaraan();
    //         if ($save) {
    //             set_pesan('data berhasil disimpan.');
    //             redirect('kendaraan');
    //         } else {
    //             set_pesan('data gagal disimpan', false);
    //             redirect('kendaraan/tambah');
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
    
    // public function add()
    // {
    //     $this->_validasi();
    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = "Perlengkapan";
    //         $this->template->load('templates/dashboard', 'perlengkapan/add', $data);
    //     } else {
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
