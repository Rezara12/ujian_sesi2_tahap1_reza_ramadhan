<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan_sehat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['suratsehat_m', 'sehat_m', 'daftarsuratsehat_m']);
	}
	
	public function daftar_sehat()
	{
		$data['row'] = $this->daftarsuratsehat_m->get_antriansurat()->result();
		$this->template->load('template', 'datapemeriksaansuratsehat', $data);
    }

    public function proses($id)
	{	
		
		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE ) {
			$query = $this->daftarsuratsehat_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'tambah_datapemeriksaansehat', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('pemeriksaan_sehat')."';</script>";
			}
			
		} else {
			$post = $this->input->post(null, TRUE);
			$this->sehat_m->tambah_datapemeriksaansehat($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('datasuratsehat')."';</script>";;
		}
    }

    public function tambah()
	{
		if(isset($_POST['tambah_pemeriksaansehat'])) {
			$post = $this->input->post(null, TRUE);
			$this->sehat_m->tambah_datapemeriksaansehat($post);

			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('pemeriksaan_sehat/hasil_sehat')."';</script>";
		}
    }

    public function hasil_sehat()
    {
		
        $data['row'] = $this->sehat_m->get_hasilpemeriksaan()->result();
		$this->template->load('template', 'datahasilpemeriksaansehat', $data);
	}

	function cetak_surat($id){
		$data['nama'] = $this->sehat_m->get($id)->row();
		$this->load->view('cetak/cetak_surat', $data);
	}
    

}