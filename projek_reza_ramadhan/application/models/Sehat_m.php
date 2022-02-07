<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sehat_m extends CI_Model {

    public function get($id = null) 
    {
        $this->db->select('*');
        $this->db->from('tabel_pemeriksaan');
        $this->db->join('tabel_suratsehat', 'tabel_suratsehat.id_suratsehat = tabel_pemeriksaan.id_suratsehat');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_pemeriksaan.id_dokter');
        if($id != null) {
            $this->db->where('id_pemeriksaan', $id);
            
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function tambah_datapemeriksaansehat($post) 
    {
        $params = [
            'id_suratsehat' => $post['id_suratsehat'],
            'id_dokter' => $post['id_dokter'],
            'berat_badan' => $post['berat_badan'],
            'tinggi_badan' => $post['tinggi_badan'],
            'tensi_darah' => $post['tensi_darah'],
            'suhu' => $post['suhu'],
            'nadi' => $post['nadi'],
            'saturasi' => $post['saturasi'],
            'tes_butawarna' => $post['tes_butawarna'],
            'daftarsurat_id' => $post['daftarsurat_id'],
            'tanggal_suratsehat' => $post['tanggal_suratsehat'],

        ];
        $this->db->insert('tabel_pemeriksaan', $params);
    }

    public function get_hasilpemeriksaan() 
    {
        if ($this->fungsi->user_login()->level == 4){
        $idu1					= ($this->fungsi->user_login()->id_dokter);
        $this->db->select('*');
        $this->db->from('tabel_pemeriksaan');
        $this->db->join('tabel_suratsehat', 'tabel_suratsehat.id_suratsehat = tabel_pemeriksaan.id_suratsehat');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_pemeriksaan.id_dokter');
        $this->db->where('tabel_dokter.id_dokter',  $idu1);
        }
        elseif ($this->fungsi->user_login()->level == 1) {
            $this->db->select('*');
            $this->db->from('tabel_pemeriksaan');
            $this->db->join('tabel_suratsehat', 'tabel_suratsehat.id_suratsehat = tabel_pemeriksaan.id_suratsehat');
            $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_pemeriksaan.id_dokter');
        }
        $this->db->order_by('id_pemeriksaan', 'desc');
        $query = $this->db->get();
        return $query;
    }

}