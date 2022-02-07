<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datasuratsehat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('suratsehat_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->suratsehat_m->get();
		$this->template->load('template', 'datasuratsehat', $data);
    }

    public function tambah()
	{
        $data = array(
			'kode_suratsehat' => $this->suratsehat_m->kodesuratsehat_no(),
		);
        

		$this->form_validation->set_rules('nama_suratsehat', 'Nama', 'required');
		$this->form_validation->set_rules('alamat_suratsehat', 'Alamat', 'required');
		$this->form_validation->set_rules('jeniskelamin_suratsehat', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempatlahir_suratsehat', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggallahir_suratsehat', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('keperluan', 'Keperluan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="help-block">', '</i></small>');

		if ($this->form_validation->run() == FALSE ) {
			$this->template->load('template', 'tambah_datasuratsehat', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->suratsehat_m->add($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('datasuratsehat')."';</script>";
		}
    }
    
    public function edit($id)
	{	
		$this->form_validation->set_rules('nama_suratsehat', 'Nama', 'required');
		$this->form_validation->set_rules('alamat_suratsehat', 'Alamat', 'required');
		$this->form_validation->set_rules('jeniskelamin_suratsehat', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempatlahir_suratsehat', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggallahir_suratsehat', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('keperluan', 'Keperluan', 'required');
		

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger"><i>', '</i></small>');

		if ($this->form_validation->run() == FALSE ) {
			$query = $this->suratsehat_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'edit_datasuratsehat', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('datasuratsehat')."';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->suratsehat_m->edit($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('datasuratsehat')."';</script>";
		}
    }
    
    public function hapus()
	{
		$id = $this->input->post('id_suratsehat');
		$this->suratsehat_m->hapus($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('datasuratsehat')."';</script>";
	}

}