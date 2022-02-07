<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan_m extends CI_Model {


    public function get($id = null) 
    {
        $this->db->select('*');
        $this->db->from('tabel_rawatjalan');
        $this->db->join('tabel_pasien', 'tabel_pasien.id_pasien = tabel_rawatjalan.id_pasien');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_rawatjalan.id_dokter');
        if($id != null) {
            $this->db->where('id_rawatjalan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_resep($id = null) 
    {
        $this->db->from('data_resep');
        if($id != null) {
            $this->db->where('id_layanan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_resepobat($id = null) 
    {
        $this->db->from('tabel_resep');
        if($id != null) {
            $this->db->where('id_resep', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambah_datapemeriksaan($post) 
    {
        $params = [
            'koko' => $post['koko'],
            'id_pasien' => $post['id_pasien'],
            'id_dokter' => $post['id_dokter'],
            'catatan' => $post['catatan'],
            'tgl_layanan' => $post['tgl_layanan'],

        ];
        $this->db->insert('tabel_layanan', $params);
    }

    public function get_pemeriksaan() 
    {
        if ($this->fungsi->user_login()->level == 4){
        $idu1					= ($this->fungsi->user_login()->id_dokter);
        $this->db->select('*');
        $this->db->from('tabel_layanan');
        $this->db->join('tabel_pasien', 'tabel_pasien.id_pasien = tabel_layanan.id_pasien');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_layanan.id_dokter');
        $this->db->where('tabel_dokter.id_dokter',  $idu1);
        }
        elseif ($this->fungsi->user_login()->level == 1) {
            $this->db->select('*');
            $this->db->from('tabel_layanan');
            $this->db->join('tabel_pasien', 'tabel_pasien.id_pasien = tabel_layanan.id_pasien');
            $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_layanan.id_dokter');
        }
        $this->db->order_by('id_layanan', 'desc');
        $query = $this->db->get();
        return $query;
    }
    // $this->fungsi->user_login('id_dokter')
    // '".$this->session->userdata('admin_tingkat')."'
    
    public function hapus($id)
	{
		$this->db->where('id_layanan', $id);
		$this->db->delete('tabel_layanan');
    }

    public function hapusresep($id)
	{
		$this->db->where('id_resep', $id);
		$this->db->delete('tabel_resep');
    }
    
    public function tambah_resepobat($post) 
    {
        $params = [
            'nama_obat' => $post['nama_obat'],
            'harga_obat' => $post['harga_obat'],
            'id_layanan' => $post['id_layanan'],
        ];
        $this->db->insert('tabel_resep', $params);
    }

    function filterbytanggal($tanggalawal,$tanggalakhir,$nama_dokter)
    {
        $query = $this->db->query("SELECT * FROM data_laporan WHERE tgl_layanan BETWEEN '$tanggalawal' AND '$tanggalakhir' AND jenis_pasien = 'BPJS' AND nama_dokter = '$nama_dokter' ORDER BY id_layanan");
        return $query->result();
    }

    function filterbytanggalumum($tanggalawal,$tanggalakhir,$nama_dokter)
    {
        $query = $this->db->query("SELECT * FROM data_laporan WHERE tgl_layanan BETWEEN '$tanggalawal' AND '$tanggalakhir' AND jenis_pasien = 'Umum' AND nama_dokter = '$nama_dokter' ORDER BY id_layanan");
        return $query->result();
    }

}