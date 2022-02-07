<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawat_m extends CI_Model {


    public function get($id = null) 
    {
        $this->db->select('*');
        $this->db->from('tabel_user');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_user.id_dokter');
        if($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    

    public function edit($post)
    {
        $params['id_dokter'] = $post['nama_dokter'];
        $params['nama_user'] = $post['nama_user'];
        $params['jenis_kelamin_user'] = $post['jenis_kelamin_user'];
        $params['username'] = $post['username'];
        if(!empty($post['password'])){
            $params['password'] = sha1($post['password']);
        }
        $params['level'] = $post['level'];
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('tabel_user', $params);
    }

    public function hapus($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('tabel_user');
	}

    public function add($post)
    {
        $params['id_dokter'] = $post['nama_dokter'];
        $params['nama_user'] = $post['nama_user'];
        $params['jenis_kelamin_user'] = $post['jenis_kelamin_user'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['level'] = $post['level'];
        $this->db->insert('tabel_user', $params);
    }
    

}