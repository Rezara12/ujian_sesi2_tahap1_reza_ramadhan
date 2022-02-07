<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapasien extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('pasien_m');
		$this->load->library('form_validation');
	}

	public function non_aktif()
	{
		$data['row'] = $this->pasien_m->get_pasien_non();
		$this->template->load('template', 'datapasien', $data);
	}

	public function aktif()
	{
		$data['row'] = $this->pasien_m->get_pasien();
		$this->template->load('template', 'datapasien_aktif', $data);
	}

	public function aktivasi($id)
	{	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kodepasien', 'Nama', 'required');

		$this->form_validation->set_rules('nama_pasien', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');


		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="help-block">', '</span></small>');

		if ($this->form_validation->run() == FALSE ) {
			$query = $this->pasien_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'aktivasi', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('datapasien/aktif')."';</script>";
			}
			
		} else {
			$post = $this->input->post(null, TRUE);
			$this->pasien_m->aktivasi($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('datapasien/aktif')."';</script>";;
		}
	}
	
	public function edit($id)
	{	
		$this->form_validation->set_rules('kodepasien', 'Nama', 'required');
		$this->form_validation->set_rules('nama_pasien', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		$this->form_validation->set_error_delimiters('<small><span class="help-block">', '</span></small>');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger"><i>', '</i></small>');

		if ($this->form_validation->run() == FALSE ) {
			$query = $this->pasien_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'edit_datapasien', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('datapasien/aktif')."';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->pasien_m->edit($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('datapasien/aktif')."';</script>";
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id_pasien');
		$this->pasien_m->hapus($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('datapasien/aktif')."';</script>";
	}

	function print_kartu_pasien($id){
		$data['row'] = $this->pasien_m->get($id)->row();
		$this->load->view('cetak/cetak_kartu_pasien', $data);
	}

	function print_laporan_datapasien(){
		$data['row'] = $this->pasien_m->get_pasien();
		$this->load->view('cetak/cetak_laporan_datapasien', $data);
	}

	public function form_laporan_pasien(){
		$this->template->load('template', 'form_cetak/form_cetakdatapasien');
	}

	function filter(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$nilaifilter = $this->input->post('nilaifilter');

		if ($nilaifilter == 1) {
			$data['subtitle'] = "Dari tanggal : ".indo_date($tanggalawal).' Sampai tanggal : '.indo_date($tanggalakhir);
			$data['datafilter'] = $this->pasien_m->filterbytanggal($tanggalawal,$tanggalakhir);

			$this->load->view('cetak/cetak_laporan_datapasien', $data);
		}
	}
}