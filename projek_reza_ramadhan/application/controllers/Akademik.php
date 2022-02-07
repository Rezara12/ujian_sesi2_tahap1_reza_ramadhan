<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('akademik_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->akademik_m->get();
		$this->template->load('template', 'akademik', $data);
    }

    public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('npm', 'npm', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger"><i>', '</i></small>');

		if ($this->form_validation->run() == FALSE ) {
			$this->template->load('template', 'tambah_mahasiwa');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->akademik_m->add($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('akademik')."';</script>";
		}
    }
    
    public function edit($id)
	{	
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('npm', 'npm', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
		

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger"><i>', '</i></small>');

		if ($this->form_validation->run() == FALSE ) {
			$query = $this->akademik_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'edit_akademik', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('akademik')."';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->akademik_m->edit($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('akademik')."';</script>";
		}
    }
    
    public function hapus()
	{
		$id = $this->input->post('id');
		$this->akademik_m->hapus($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('akademik')."';</script>";
	}

}