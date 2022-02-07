<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_m extends CI_Model {

    public function kodeobat_no()
    {
            $query = $this->db->query("SELECT MAX(kode_obat) as kodeobat from tabel_obat");
            $hasil = $query->row();
            return $hasil->kodeobat;
    }

    public function get($id = null) 
    {
        $this->db->from('tabel_obat');
        if($id != null) {
            $this->db->where('id_obat', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params['kode_obat'] = $post['kode_obat'];
        $params['nama_obat'] = $post['nama_obat'];
        $params['harga_obat'] = $post['harga_obat'];
        $this->db->where('id_obat', $post['id_obat']);
        $this->db->update('tabel_obat', $params);
    }

    public function hapus($id)
	{
		$this->db->where('id_obat', $id);
		$this->db->delete('tabel_obat');
	}

    public function add($post)
    {
        $params['kode_obat'] = $post['kode_obat'];
        $params['nama_obat'] = $post['nama_obat'];
        $params['harga_obat'] = $post['harga_obat'];
        $this->db->insert('tabel_obat', $params);
    }
    

}