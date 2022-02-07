<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokter_m extends CI_Model {

    public function kodedokter_no()
    {
        $sql = "SELECT MAX(MID(kodedokter,9,4)) AS kodedokter_no
                FROM tabel_dokter
                WHERE MID(kodedokter,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->kodedokter_no) + 1;
            $no = sprintf("%'.04d", $n);
        } else {
            $no = "0001";
        }
        $kodedokter = "DR".date('ymd').$no;
        return $kodedokter;
    }

    public function get($id = null) 
    {
        $this->db->from('tabel_dokter');
        if($id != null) {
            $this->db->where('id_dokter', $id);
        }
        $query = $this->db->get();
        return $query;
    }    

    public function edit($post)
    {
        $params['kodedokter'] = $post['kodedokter'];
        $params['nama_dokter'] = $post['nama_dokter'];
        $params['spesialis'] = $post['spesialis'];
        $params['harga_layanan'] = $post['harga_layanan'];
        $params['jam_praktek'] = $post['jam_praktek'];
        $this->db->where('id_dokter', $post['id_dokter']);
        $this->db->update('tabel_dokter', $params);
    }

    public function hapus($id)
	{
		$this->db->where('id_dokter', $id);
		$this->db->delete('tabel_dokter');
	}

    public function add($post)
    {
        $params['kodedokter'] = $post['kodedokter'];
        $params['nama_dokter'] = $post['nama_dokter'];
        $params['spesialis'] = $post['spesialis'];
        $params['harga_layanan'] = $post['harga_layanan'];
        $params['jam_praktek'] = $post['jam_praktek'];
        $params['tgl_simpan'] = $post['tgl_simpan'];
        $this->db->insert('tabel_dokter', $params);
    }
    
    function filterbytanggal($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM tabel_dokter WHERE tgl_simpan BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY id_dokter ASC");
        return $query->result();
    }

}