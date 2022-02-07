<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_m extends CI_Model {

    public function kodepasien_no()
    {
        $sql = "SELECT MAX(MID(kodepasien,9,4)) AS kodepasien_no
                FROM tabel_pasien
                WHERE MID(kodepasien,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->kodepasien_no) + 1;
            $no = sprintf("%'.04d", $n);
        } else {
            $no = "0001";
        }
        $kodepasien = "PN".date('ymd').$no;
        return $kodepasien;
    }

    public function get($id = null) 
    {
        $this->db->from('tabel_pasien');
        if($id != null) {
            $this->db->where('id_pasien', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pasien() 
    {
        $this->db->select('*');
        $this->db->from('tabel_pasien');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query;
    }

    public function get_pasien_daftar() 
    {
        $this->db->select('*');
        $this->db->from('data_pasienmodal');
        // $this->db->join('tabel_rawatjalan', 'tabel_pasien.id_pasien = tabel_rawatjalan.id_pasien', 'left');
        // $this->db->where('jenis_pasien', null);
        // $this->db->where('status', 1);
        
        $query = $this->db->get();
        return $query;
    }

    public function get_pasien_non() 
    {
        $this->db->select('*');
        $this->db->from('tabel_pasien');
        $this->db->where('status', 0);
        $query = $this->db->get();
        return $query;
    }

    public function aktivasi($post)
    {

        $params['status'] = $post['status'];
        $this->db->where('id_pasien', $post['id_pasien']);
        $this->db->update('tabel_pasien', $params);
    }

    public function edit($post)
    {
        $params['kodepasien'] = $post['kodepasien'];
        $params['nama_pasien'] = $post['nama_pasien'];
        $params['jenis_kelamin'] = $post['jenis_kelamin'];
        $params['tempat_lahir'] = $post['tempat_lahir'];
        $params['tanggal_lahir'] = $post['tanggal_lahir'];
        $params['alamat'] = $post['alamat'];
        $this->db->where('id_pasien', $post['id_pasien']);
        $this->db->update('tabel_pasien', $params);
    }

    public function hapus($id)
	{
		$this->db->where('id_pasien', $id);
		$this->db->delete('tabel_pasien');
	}

    public function add($post)
    {
        $params['kodepasien'] = $post['kodepasien'];
        $params['nama_pasien'] = $post['nama_pasien'];
        $params['jenis_kelamin'] = $post['jenis_kelamin'];
        $params['tempat_lahir'] = $post['tempat_lahir'];
        $params['tanggal_lahir'] = $post['tanggal_lahir'];
        $params['alamat'] = $post['alamat'];
        $params['tgl_daftar'] = $post['tgl_daftar'];
        $this->db->insert('tabel_pasien', $params);
    }

    function filterbytanggal($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM tabel_pasien WHERE tgl_daftar BETWEEN '$tanggalawal' AND '$tanggalakhir' AND status = 1 ORDER BY id_pasien");
        
        return $query->result();
    }
}