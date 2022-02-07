<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suratsehat_m extends CI_Model {

    public function kodesuratsehat_no()
    {
        $sql = "SELECT MAX(MID(kode_suratsehat,9,4)) AS kodesuratsehat_no
                FROM tabel_suratsehat
                WHERE MID(kode_suratsehat,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->kodesuratsehat_no) + 1;
            $no = sprintf("%'.04d", $n);
        } else {
            $no = "0001";
        }
        $kode_suratsehat = "SS".date('ymd').$no;
        return $kode_suratsehat;
    }

    public function get($id = null) 
    {
        $this->db->select('*');
        $this->db->from('tabel_suratsehat');
        if($id != null) {
            $this->db->where('id_suratsehat', $id);
            
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_daftar() 
    {
        $this->db->select('*');
        $this->db->from('tabel_suratsehat');
        $this->db->join('tabel_pemeriksaan', 'tabel_suratsehat.id_suratsehat = tabel_pemeriksaan.id_suratsehat', 'left');
        $this->db->where('berat_badan', null);
        $query = $this->db->get();
        return $query;
    }


    public function edit($post)
    {
        $params['kode_suratsehat'] = $post['kode_suratsehat'];
        $params['nama_suratsehat'] = $post['nama_suratsehat'];
        $params['alamat_suratsehat'] = $post['alamat_suratsehat'];
        $params['jeniskelamin_suratsehat'] = $post['jeniskelamin_suratsehat'];
        $params['tempatlahir_suratsehat'] = $post['tempatlahir_suratsehat'];
        $params['tanggallahir_suratsehat'] = $post['tanggallahir_suratsehat'];
        $params['keperluan'] = $post['keperluan'];
        $this->db->where('id_suratsehat', $post['id_suratsehat']);
        $this->db->update('tabel_suratsehat', $params);
    }

    public function hapus($id)
	{
		$this->db->where('id_suratsehat', $id);
		$this->db->delete('tabel_suratsehat');
	}

    public function add($post)
    {
        $params['kode_suratsehat'] = $post['kode_suratsehat'];
        $params['nama_suratsehat'] = $post['nama_suratsehat'];
        $params['alamat_suratsehat'] = $post['alamat_suratsehat'];
        $params['jeniskelamin_suratsehat'] = $post['jeniskelamin_suratsehat'];
        $params['tempatlahir_suratsehat'] = $post['tempatlahir_suratsehat'];
        $params['tanggallahir_suratsehat'] = $post['tanggallahir_suratsehat'];
        $params['keperluan'] = $post['keperluan'];
        $this->db->insert('tabel_suratsehat', $params);
    }
    

}