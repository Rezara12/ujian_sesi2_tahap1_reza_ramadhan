<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarsuratsehat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['suratsehat_m', 'dokter_m', 'daftarsuratsehat_m']);
	}
	
	public function index()
	{
		$data['row'] = $this->daftarsuratsehat_m->get_suratsehat()->result();
		$this->template->load('template', 'datasuratsehatdaftar', $data);
	}

	public function tambah()
	{
		$pasien_sehat = $this->suratsehat_m->get()->result();
		$dokter = $this->dokter_m->get()->result();
		$data = ['pasien_sehat' => $pasien_sehat,
					'dokter' => $dokter,
				];

		$this->template->load('template', 'daftarsuratsehat', $data);
	}

	public function proses()
	{
		if(isset($_POST['tambah_daftarsehat'])) {
			$post = $this->input->post(null, TRUE);
			$this->daftarsuratsehat_m->tambahsuratsehat($post);

			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('daftarsuratsehat')."';</script>";
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
		$id = $this->input->post('id_daftarsurat');
		$this->daftarsuratsehat_m->hapus($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('daftarsuratsehat')."';</script>";
	}

}