<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datarawatjalan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['pasien_m', 'dokter_m', 'rawatjalan_m']);
	}
	
	public function index()
	{
		$data['row'] = $this->rawatjalan_m->get_rawatjalan()->result();
		$this->template->load('template', 'datarawatjalan', $data);
	}

	public function tambah()
	{
		$pasien = $this->pasien_m->get_pasien_daftar()->result();
		$dokter = $this->dokter_m->get()->result();
		$data = ['pasien' => $pasien,
					'dokter' => $dokter,
				];

		$this->template->load('template', 'daftarrawatjalan', $data);
	}

	public function proses()
	{
		if(isset($_POST['tambah_rawatjalan'])) {
			$post = $this->input->post(null, TRUE);
			$this->rawatjalan_m->tambahrawatjalan($post);

			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('datarawatjalan')."';</script>";
		}
	}
	
	public function form_laporan_rawat(){
		$this->template->load('template', 'form_cetak/form_cetakdatarawatjalan');
	}

	function filter(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$nilaifilter = $this->input->post('nilaifilter');

		if ($nilaifilter == 1) {
			$data['subtitle'] = "Dari tanggal : ".indo_date($tanggalawal).' Sampai tanggal : '.indo_date($tanggalakhir);
			$data['datafilter'] = $this->rawatjalan_m->filterbytanggal($tanggalawal,$tanggalakhir);

			$this->load->view('cetak/cetak_laporan_datarawatjalan', $data);
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id_rawatjalan');
		$this->rawatjalan_m->hapus($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('datarawatjalan')."';</script>";
	}

}