<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Alat";
        $data['alat'] = $this->admin->get('alat');
        $this->template->load('templates/dashboard', 'alat/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('nama', 'Nama ', 'required|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|numeric');
        
    }

    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Alat";
            $this->template->load('templates/dashboard', 'alat/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('alat', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('alat');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('alat/add');
            }
        }
    }


    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "alat";
            $data['alat'] = $this->admin->get('alat', ['nama' => $id]);
            $this->template->load('templates/dashboard', 'alat/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('alat', 'nama', $id, $input);

            if ($update) {
                set_pesan('data berhasil diedit.');
                redirect('alat');
            } else {
                set_pesan('data gagal diedit.');
                redirect('alat/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('alat', 'nama', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('alat');
    }
}
