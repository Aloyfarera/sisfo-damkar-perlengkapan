<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    // PERINTAH QUERY UNTUK CRUD KENDARAAN
    // Query tambah data kendaraan
    public function tambah_kendaraan()
    {
        $data = [
            "jns_kendaraan" =>$this->input->post('jns_kendaraan', true),
            "no_polisi" =>$this->input->post('no_polisi', true),
            "merk" => $this->input->post('merk' ,true),
            "no_lbg" => $this->input->post('no_lbg',true),
            "thn_pembuatan" => $this->input->post('thn_pembuatan', true),
            "warna" => $this->input->post('warna', true),
            "bahan_bakar" => $this->input->post('bahan_bakar', true),
            "no_bpkb" => $this->input->post('no_bpkb', true),
            "no_mesin" => $this->input->post('no_mesin', true),
            "no_rangka" => $this->input->post('no_rangka', true),
            "asal_kendaraan" => $this->input->post('asal_kendaraan', true),
            "kondisi_kndrn" => $this->input->post('kondisi_kndrn', true)
        ];

        $this->db->insert('kendaraan',$data);
    }
    

    // Query menampilkan semua data kendaraan
    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function get_all_kndr()
    {
        $this->db->order_by('jns_kendaraan','ASC');
        return $this->db->get('kendaraan')->result_array();
    }


    // Query hapus data kendaraan
    public function hapus_kendaraan($id)
    {
        $this->db->where('id_kendaraan',$id);
        $this->db->delete('kendaraan');
    }


    // Query menampilkan detail data kendaraan
    public function detail($id)
    {
        return $this->db->get_where('kendaraan', ['id_kendaraan' => $id] )->row_array();
    }
    
    // Query menampilkan detail data perlengkapan
    public function detail_tools($id)
    {
        return $this->db->get_where('tools', ['id_tools' => $id] )->row_array();
    }

    // Query edit data kendaraan
    public function edit_kendaraan($id)
    {
        $data = [
            "jns_kendaraan" =>$this->input->post('jns_kendaraan', true),
            "no_polisi" =>$this->input->post('no_polisi', true),
            "merk" => $this->input->post('merk' ,true),
            "no_lbg" => $this->input->post('no_lbg',true),
            "thn_pembuatan" => $this->input->post('thn_pembuatan', true),
            "warna" => $this->input->post('warna', true),
            "bahan_bakar" => $this->input->post('bahan_bakar', true),
            "no_bpkb" => $this->input->post('no_bpkb', true),
            "no_mesin" => $this->input->post('no_mesin', true),
            "no_rangka" => $this->input->post('no_rangka', true),
            "asal_kendaraan" => $this->input->post('asal_kendaraan', true),
            "kondisi_kndrn" => $this->input->post('kondisi_kndrn', true)
        ];
        
        $this->db->where('id_kendaraan', $this->input->post('id_kendaraan'));
        $this->db->update('kendaraan',$data);
    }


    // PERINTAH QUERY UNTUK CRUD PERLENGKAPAN
    // Query tambah data perlengkapan berdasarkan perlengkapan
    public function tambah_tools(){
        $data = [
            "kode_kendaraan" =>$this->input->post('kode_kendaraan', true),
            "id_kendaraan" =>$this->input->post('id_kendaraan', true),
            "nama_tools" => $this->input->post('nama_tools' ,true),
            "kondisi_real" => $this->input->post('kondisi_real',true),
            "kondisi_ideal" => $this->input->post('kondisi_ideal', true),
            "keterangan" => $this->input->post('keterangan', true),
        ];

        $this->db->insert('tools',$data);
    }


    // Query menampilkan data perlengkapan berdasarkan kendaraan
    public function tools($id)
    {   
        $this->db->select('*');
        $this->db->from('tools');
        $this->db->where('kode_kendaraan', $id);
        $this->db->order_by('nama_tools','ASC');
        $result = $this->db->get()->result_array();
        return $result;
    }

    //Query data kekurangan
    public function kesimpulan()
    {
        $this->db->select('*');
        $this->db->from('kendaraan');
        $this->db->join('tools', 'tools.id_kendaraan = kendaraan.id_kendaraan');
        $this->db->order_by('jns_kendaraan');
        return $this->db->get()->result_array();
    }

     // Query hapus data kendaraan
    public function hapus_tools($id)
    {
        $this->db->where('id_tools',$id);
        $this->db->delete('tools');
    }
    

    // Query edit data Perlengkapan
    public function edit_tools()
    {
        $data = [
            "id_kendaraan" =>$this->input->post('id_kendaraan', true),
            "kode_kendaraan" =>$this->input->post('kode_kendaraan', true),
            "nama_tools" =>$this->input->post('nama_tools', true),
            "kondisi_real" =>$this->input->post('kondisi_real', true),
            "kondisi_ideal" =>$this->input->post('kondisi_ideal', true),
            "keterangan" =>$this->input->post('keterangan', true)
        ];
        
        $this->db->where('id_tools', $this->input->post('id_tools'));
        $this->db->update('tools',$data);
    }

    

    // Query tambah data perlengkapan
    public function tambah_perlengkapan()
    {
        $data = [
            "nama" =>$this->input->post('nama', true),
            "jumlah" =>$this->input->post('jumlah', true)
        ];

        $this->db->insert('alat',$data);
    }

    // Query menampilkan detail data kendaraan
    public function detail_alat($id)
    {
        return $this->db->get_where('alat', ['id_alat' => $id] )->row_array();
    }


    public function get_kondisi($nama)
    {
        return $this->db->get_where('alat',['nama' => $nama])->result();
    }


    // Query edit data Perlengkapan
    public function edit_perlengkapan()
    {
        $data = [
            "nama" =>$this->input->post('nama', true),
            "jumlah" =>$this->input->post('jumlah', true)
        ];
        
        $this->db->where('id_alat', $this->input->post('id_alat'));
        $this->db->update('alat',$data);
    }

    // Query hapus data kendaraan
    public function hapus_perlengkapan($id)
    {
        $this->db->where('id_alat',$id);
        $this->db->delete('alat');
    }

    public function getAll()
	{
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('alat')->result_array(); //Menampilkan semua data mahasiswa kedalam bentuk array
	}

    //  public function detail($id)
    // {
    //         $this->db->like('no_polisi', $no_polisi);
    //         $this->db->or_like('nim', $keyword);
    //         $this->db->or_like('email', $keyword);
    //         $this->db->or_like('jurusan', $keyword);
    //         return $this->db->get('mahasiswa')->result_array();
    //     return $this->db->get('perlengkapan')->result_array();
    //     return $this->db->get_where('kendaraan', ['id_kendaraan' => $id] )->row_array();
    // }


    public function get_detail($id)
    {
            $this->db->like('no_polisi', $no_polisi);
            $this->db->or_like('nim', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('jurusan', $keyword);
            return $this->db->get('mahasiswa')->result_array();
        return $this->db->get('perlengkapan')->result_array();
        return $this->db->get_where('perlengkapan', ['id_kendaraan' => $id] )->row_array();
    }

    public function getUsers($id)
    {
        /**
         * ID disini adalah untuk data yang tidak ingin ditampilkan. 
         * Maksud saya disini adalah 
         * tidak ingin menampilkan data user yang digunakan, 
         * pada managemen data user
         */
        $this->db->where('id_user !=', $id);
        return $this->db->get('user')->result_array();
    }

    public function tidak_memadai()
    {
        $query = "SELECT  COUNT(IF( keterangan='tidak memadai', keterangan, NULL)) AS tidak_memadai
        FROM tools";
        return $this->db->query($query)->row_array();
    
    }

    public function memadai()
    {
        $query = "SELECT  COUNT(IF( keterangan='memadai', keterangan, NULL)) AS memadai
        FROM tools";
        return $this->db->query($query)->row_array();
    
    }


    public function count($table)
    {
        return $this->db->count_all($table);
    }

    //public function getBarang()
    //{
    //    $this->db->join('jenis j', 'b.jenis_id = j.id_jenis');
    //    $this->db->join('satuan s', 'b.satuan_id = s.id_satuan');
    //    $this->db->order_by('id_barang');
    //    return $this->db->get('barang b')->result_array();
    //}

    //public function getBarangMasuk($limit = null, $id_barang = null, $range = null)
    //{
    //    $this->db->select('*');
    //    $this->db->join('user u', 'bm.user_id = u.id_user');
    //    $this->db->join('supplier sp', 'bm.supplier_id = sp.id_supplier');
    //    $this->db->join('barang b', 'bm.barang_id = b.id_barang');
    //    $this->db->join('satuan s', 'b.satuan_id = s.id_satuan');
    //    if ($limit != null) {
    //        $this->db->limit($limit);
    //    }

    //    if ($id_barang != null) {
    //        $this->db->where('id_barang', $id_barang);
    //    }

    //    if ($range != null) {
    //        $this->db->where('tanggal_masuk' . ' >=', $range['mulai']);
    //        $this->db->where('tanggal_masuk' . ' <=', $range['akhir']);
    //    }

    //    $this->db->order_by('id_barang_masuk', 'DESC');
    //    return $this->db->get('barang_masuk bm')->result_array();
    //}

    //public function getBarangKeluar($limit = null, $id_barang = null, $range = null)
    //{
    //    $this->db->select('*');
    //    $this->db->join('user u', 'bk.user_id = u.id_user');
    //    $this->db->join('barang b', 'bk.barang_id = b.id_barang');
    //    $this->db->join('satuan s', 'b.satuan_id = s.id_satuan');
    //    if ($limit != null) {
    //        $this->db->limit($limit);
    //    }
    //    if ($id_barang != null) {
    //        $this->db->where('id_barang', $id_barang);
    //    }
    //    if ($range != null) {
    //        $this->db->where('tanggal_keluar' . ' >=', $range['mulai']);
    //        $this->db->where('tanggal_keluar' . ' <=', $range['akhir']);
    //    }
    //    $this->db->order_by('id_barang_keluar', 'DESC');
    //    return $this->db->get('barang_keluar bk')->result_array();
    //}

    //public function getMax($table, $field, $kode = null)
    //{
    //    $this->db->select_max($field);
    //    if ($kode != null) {
    //        $this->db->like($field, $kode, 'after');
    //    }
    //    return $this->db->get($table)->row_array()[$field];
    //}



    //public function sum($table, $field)
    //{
    //    $this->db->select_sum($field);
    //    return $this->db->get($table)->row_array()[$field];
    //}

    //public function min($table, $field, $min)
    //{
    //    $field = $field . ' <=';
    //    $this->db->where($field, $min);
    //    return $this->db->get($table)->result_array();
    //}

    //public function chartBarangMasuk($bulan)
    //{
    //    $like = 'T-BM-' . date('y') . $bulan;
    //    $this->db->like('id_barang_masuk', $like, 'after');
    //    return count($this->db->get('barang_masuk')->result_array());
    //}

    //public function chartBarangKeluar($bulan)
    //{
    //    $like = 'T-BK-' . date('y') . $bulan;
    //    $this->db->like('id_barang_keluar', $like, 'after');
    //    return count($this->db->get('barang_keluar')->result_array());
    //}

    //public function laporan($table, $mulai, $akhir)
    //{
    //    $tgl = $table == 'barang_masuk' ? 'tanggal_masuk' : 'tanggal_keluar';
    //    $this->db->where($tgl . ' >=', $mulai);
    //    $this->db->where($tgl . ' <=', $akhir);
    //    return $this->db->get($table)->result_array();
    //}

    //public function cekStok($id)
    //{
    //    $this->db->join('satuan s', 'b.satuan_id=s.id_satuan');
    //    return $this->db->get_where('barang b', ['id_barang' => $id])->row_array();
    //}

    // public function update($table, $pk, $id, $data)
    //{
    //    $this->db->where($pk, $id);
    //    return $this->db->update($table, $data);
    //}

    // public function insert($table, $data, $batch = false)
    //{
    //    return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    //}

    //public function delete($table, $pk, $id)
    //{
    //    return $this->db->delete($table, [$pk => $id]);
    //}

}
