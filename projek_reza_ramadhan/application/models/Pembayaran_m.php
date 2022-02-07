<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_m extends CI_Model {

    public function get($id = null) 
    {
        $this->db->from('tabel_transaksi');
        if($id != null) {
            $this->db->where('id_transaksi', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pembayaran()
	{
		$this->db->select('*');
        $this->db->from('tabel_layanan');
        $this->db->join('tabel_pasien', 'tabel_pasien.id_pasien = tabel_layanan.id_pasien');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_layanan.id_dokter');
        $this->db->join('tabel_rawatjalan', 'tabel_rawatjalan.id_rawatjalan = tabel_layanan.koko');
        $this->db->join('tabel_transaksi', 'tabel_layanan.id_layanan = tabel_transaksi.layanan', 'left');
        $this->db->where('total_tagihan', null);
        $this->db->where('jenis_pasien', "Umum");
        $query = $this->db->get();
        return $query;
    }

    public function get_hasilpembayaran()
	{
        $this->db->select('*');
        $this->db->from('tabel_transaksi');
        $this->db->join('tabel_pasien', 'tabel_pasien.id_pasien = tabel_transaksi.id_pasien');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_transaksi.id_dokter');
        $this->db->where('jenispasien', 'Umum');
        $query = $this->db->get();
        return $query;
    }

    public function get_struk($id = null) 
    {
        $this->db->select('*');
        $this->db->from('tabel_transaksi');
        $this->db->join('tabel_pasien', 'tabel_pasien.id_pasien = tabel_transaksi.id_pasien');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_transaksi.id_dokter');
        if($id != null) {
            $this->db->where('id_transaksi', $id);
            $this->db->where('jenispasien', 'Umum');
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_bayar($id = null)
	{
		$this->db->select('*');
        $this->db->from('tabel_layanan');
        $this->db->join('tabel_pasien', 'tabel_pasien.id_pasien = tabel_layanan.id_pasien');
        $this->db->join('tabel_dokter', 'tabel_dokter.id_dokter = tabel_layanan.id_dokter');
        $this->db->join('tabel_rawatjalan', 'tabel_rawatjalan.id_rawatjalan = tabel_layanan.koko');
            $this->db->where('id_layanan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function get_resep($id = null)
	{
		$this->db->select('*');
        $this->db->from('data_totalobat');
        $this->db->where('id_layanan', $id);
        $query = $this->db->get();
        return $query;
    }


    public function add($post)
    {
        $params['id_pasien'] = $post['id_pasien'];
        $params['id_dokter'] = $post['id_dokter'];
        $params['layanan'] = $post['id_layanan'];
        $params['tgl_transaksi'] = $post['tgl_transaksi'];
        $params['jenispasien'] = $post['jenis_pasien'];
        $params['total_tagihan'] = $post['total_tagihan'];
        $params['uang_bayar'] = $post['uang_bayar'];
        $params['uang_kembalian'] = $post['uang_kembalian'];
        $this->db->insert('tabel_transaksi', $params);
    }

    

}