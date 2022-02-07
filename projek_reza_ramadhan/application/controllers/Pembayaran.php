<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('pembayaran_m');
		$this->load->library('form_validation');
	}

	public function pembayaran()
	{
		$data['row'] = $this->pembayaran_m->get_pembayaran();
		$this->template->load('template', 'datapembayaran', $data);
	}
	
	public function hasilpembayaran()
	{
		$data['row'] = $this->pembayaran_m->get_hasilpembayaran();
		$this->template->load('template', 'datahasilpembayaran', $data);
	}
	
	public function bayar($id)
	{	
		
		$layanan = $this->pembayaran_m->get_bayar($id);
		$resep = $this->pembayaran_m->get_resep($id);
		$data['resep'] = $resep->row();
		$data['row'] = $layanan->row();
		$this->template->load('template', 'tambah_datapembayaran', $data);

	}

	public function simpan()
	{
		$this->form_validation->set_rules('uang_bayar', 'Uang Bayar', 'required');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_error_delimiters('<small><span class="text-danger"><i>', '</i></small>');

		if ($this->form_validation->run() == FALSE ) {
			$this->template->load('template', 'tambah_datapembayaran', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->pembayaran_m->add($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('pembayaran/hasilpembayaran')."';</script>";
		}
	}

	function cetak_struk($id){
		$data['row'] = $this->pembayaran_m->get_struk($id)->row();
		$this->load->view('cetak/cetak_struk', $data);
	}

}
