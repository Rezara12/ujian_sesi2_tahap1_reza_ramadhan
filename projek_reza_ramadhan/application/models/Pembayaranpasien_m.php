<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaranpasien_m extends CI_Model {


    public function get($id = null) 
    {
        $this->db->from('pembayaran_pasien');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params['nama'] = $post['nama'];
        $params['jumlah'] = $post['jumlah'];
        $params['alamat'] = $post['alamat'];
        $this->db->where('id', $post['id']);
        $this->db->update('pembayaran_pasien', $params);
    }

    public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pembayaran_pasien');
	}

    public function add($post)
    {
        $params['nama'] = $post['nama'];
        $params['jumlah'] = $post['jumlah'];
        $params['alamat'] = $post['alamat'];
        $this->db->insert('pembayaran_pasien', $params);
    }
    

}