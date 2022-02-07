<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarsuratsehat_m extends CI_Model {

    public function get_suratsehat() 
    {
        $this->db->select('*');
        $this->db->from('tabel_daftarsurat');
        $this->db->join('tabel_suratsehat', 'tabel_suratsehat.id_suratsehat = tabel_daftarsurat.id_suratsehat');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_daftarsurat.id_dokter');
        $this->db->order_by('id_daftarsurat', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null) 
    {
        $this->db->select('*');
        $this->db->from('tabel_daftarsurat');
        $this->db->join('tabel_suratsehat', 'tabel_suratsehat.id_suratsehat = tabel_daftarsurat.id_suratsehat');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_daftarsurat.id_dokter');
        if($id != null) {
            $this->db->where('id_daftarsurat', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    

    public function get_antriansurat() 
    {
        if ($this->fungsi->user_login()->level == 4){
        $idu1					= ($this->fungsi->user_login()->id_dokter);
        $this->db->select('*');
        $this->db->from('tabel_daftarsurat');
        $this->db->join('tabel_suratsehat', 'tabel_suratsehat.id_suratsehat = tabel_daftarsurat.id_suratsehat');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_daftarsurat.id_dokter');
        $this->db->join('tabel_pemeriksaan', 'tabel_daftarsurat.id_daftarsurat = tabel_pemeriksaan.daftarsurat_id', 'left');
        $this->db->where('tinggi_badan', null);
        $this->db->where('tabel_dokter.id_dokter',  $idu1);
        }
        elseif ($this->fungsi->user_login()->level == 1) {
        $this->db->select('*');
        $this->db->from('tabel_daftarsurat');
        $this->db->join('tabel_suratsehat', 'tabel_suratsehat.id_suratsehat = tabel_daftarsurat.id_suratsehat');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_daftarsurat.id_dokter');
        $this->db->join('tabel_pemeriksaan', 'tabel_daftarsurat.id_daftarsurat = tabel_pemeriksaan.daftarsurat_id', 'left');
        $this->db->where('tinggi_badan', null);
        }
        $query = $this->db->get();
        return $query;
    }

    
    public function tambahsuratsehat($post) 
    {
        $params = [
            
            'id_suratsehat' => $post['id_suratsehat'],
            'id_dokter' => $post['id_dokter'],
            'tanggal_daftarsurat' => $post['tanggal_daftarsurat'],
        ];
        $this->db->insert('tabel_daftarsurat', $params);
    }

    function filterbytanggal($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM `tabel_rawatjalan` JOIN `tabel_pasien` ON `tabel_pasien`.`id_pasien` = `tabel_rawatjalan`.`id_pasien` JOIN `tabel_dokter` ON `tabel_dokter`.`id_dokter` = `tabel_rawatjalan`.`id_dokter` WHERE date BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY id_rawatjalan ASC");
        return $query->result();
    }

    public function hapus($id)
	{
		$this->db->where('id_daftarsurat', $id);
		$this->db->delete('tabel_daftarsurat');
	}


}