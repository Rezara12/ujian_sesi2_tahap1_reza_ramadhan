<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawatjalan_m extends CI_Model {

    public function get_rawatjalan() 
    {
        $this->db->select('*');
        $this->db->from('tabel_rawatjalan');
        $this->db->join('tabel_pasien', 'tabel_pasien.id_pasien = tabel_rawatjalan.id_pasien');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_rawatjalan.id_dokter');
        $this->db->order_by('id_rawatjalan', 'desc');
        $query = $this->db->get();
        return $query;
    }
    

    public function get_antrian() 
    {
        if ($this->fungsi->user_login()->level == 4){
        $idu1					= ($this->fungsi->user_login()->id_dokter);
        $this->db->select('*');
        $this->db->from('tabel_rawatjalan');
        $this->db->join('tabel_pasien', 'tabel_pasien.id_pasien = tabel_rawatjalan.id_pasien');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_rawatjalan.id_dokter');
        $this->db->join('tabel_layanan', 'tabel_rawatjalan.id_rawatjalan = tabel_layanan.koko', 'left');
        $this->db->where('catatan', null);
        $this->db->where('tabel_dokter.id_dokter',  $idu1);
        }
        elseif ($this->fungsi->user_login()->level == 1) {
        $this->db->select('*');
        $this->db->from('tabel_rawatjalan');
        $this->db->join('tabel_pasien', 'tabel_pasien.id_pasien = tabel_rawatjalan.id_pasien');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_rawatjalan.id_dokter');
        $this->db->join('tabel_layanan', 'tabel_rawatjalan.id_rawatjalan = tabel_layanan.koko', 'left');
        $this->db->where('catatan', null);
        }
        $query = $this->db->get();
        return $query;
    }

    
    public function tambahrawatjalan($post) 
    {
        $params = [
            
            'id_pasien' => $post['id_pasien'],
            'id_dokter' => $post['id_dokter'],
            'jenis_pasien' => $post['jenis_pasien'],
            'no_bpjs' => $post['no_bpjs'],
            'date' => $post['date'],
            // 'kiki' => $post['kiki'],

        ];
        $this->db->insert('tabel_rawatjalan', $params);
    }

    function filterbytanggal($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM `tabel_rawatjalan` JOIN `tabel_pasien` ON `tabel_pasien`.`id_pasien` = `tabel_rawatjalan`.`id_pasien` JOIN `tabel_dokter` ON `tabel_dokter`.`id_dokter` = `tabel_rawatjalan`.`id_dokter` WHERE date BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY id_rawatjalan ASC");
        return $query->result();
    }

    public function hapus($id)
	{
		$this->db->where('id_rawatjalan', $id);
		$this->db->delete('tabel_rawatjalan');
	}


}