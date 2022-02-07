<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik_m extends CI_Model {


    public function get($id = null) 
    {
        $this->db->from('mahasiswa');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params['nama'] = $post['nama'];
        $params['npm'] = $post['npm'];
        $params['alamat'] = $post['alamat'];
        $this->db->where('id', $post['id']);
        $this->db->update('mahasiswa', $params);
    }

    public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');
	}

    public function add($post)
    {
        $params['nama'] = $post['nama'];
        $params['npm'] = $post['npm'];
        $params['alamat'] = $post['alamat'];
        $this->db->insert('mahasiswa', $params);
    }
    

}