<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaranpasien extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('pembayaranpasien_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->pembayaranpasien_m->get();
		$this->template->load('template', 'pembayaranpasien', $data);
    }

    public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger"><i>', '</i></small>');

		if ($this->form_validation->run() == FALSE ) {
			$this->template->load('template', 'tambah_pembayaran');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->pembayaranpasien_m->add($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('pembayaranpasien')."';</script>";
		}
    }
    
    public function edit($id)
	{	
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
		

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger"><i>', '</i></small>');

		if ($this->form_validation->run() == FALSE ) {
			$query = $this->pembayaranpasien_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'edit_pembayaranpasien', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('pembayaranpasien')."';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->pembayaranpasien_m->edit($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('pembayaranpasien')."';</script>";
		}
    }
    
    public function hapus()
	{
		$id = $this->input->post('id');
		$this->pembayaranpasien_m->hapus($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('pembayaranpasien')."';</script>";
	}

}