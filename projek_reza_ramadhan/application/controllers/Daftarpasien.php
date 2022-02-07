<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarpasien extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('pasien_m');
	}

	public function index()
	{
		$data = array(
			'kodepasien' => $this->pasien_m->kodepasien_no(),
		);
		$this->load->view('daftarpasien', $data);
	}

	public function tambah()
	{
		$data = array(
			'kodepasien' => $this->pasien_m->kodepasien_no(),
		);
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kodepasien', 'Nama', 'required');

		$this->form_validation->set_rules('nama_pasien', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="help-block">', '</span></small>');

		if ($this->form_validation->run() == FALSE ) {
			$this->load->view('daftarpasien', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->pasien_m->add($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('halamanutama')."';</script>";
		}
	}
}