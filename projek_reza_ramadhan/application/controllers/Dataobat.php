<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataobat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('obat_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->obat_m->get();
		$this->template->load('template', 'dataobat', $data);
    }

    public function tambah()
	{
        $dariDB = $this->obat_m->kodeobat_no();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 3, 4);
        $kodeobatnow = $nourut + 1;
        $data = array('kode_obat' => $kodeobatnow);
        

		$this->form_validation->set_rules('nama_obat', 'Nama', 'required');
		$this->form_validation->set_rules('harga_obat', 'Harga Obat', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger"><i>', '</i></small>');

		if ($this->form_validation->run() == FALSE ) {
			$this->template->load('template', 'tambah_dataobat', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->obat_m->add($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('dataobat')."';</script>";
		}
    }
    
    public function edit($id)
	{	
		$this->form_validation->set_rules('nama_obat', 'Nama', 'required');
		$this->form_validation->set_rules('harga_obat', 'Harga Obat', 'required');
		

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger"><i>', '</i></small>');

		if ($this->form_validation->run() == FALSE ) {
			$query = $this->obat_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'edit_dataobat', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('dataobat')."';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->obat_m->edit($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('dataobat')."';</script>";
		}
    }
    
    public function hapus()
	{
		$id = $this->input->post('id_obat');
		$this->obat_m->hapus($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('dataobat')."';</script>";
	}

}