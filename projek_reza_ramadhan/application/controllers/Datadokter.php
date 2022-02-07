<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datadokter extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('dokter_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->dokter_m->get();
		$this->template->load('template', 'datadokter', $data);
    }

    public function tambah()
	{
		$data = array(
			'kodedokter' => $this->dokter_m->kodedokter_no(),
		);

		$this->form_validation->set_rules('nama_dokter', 'Nama', 'required');
		$this->form_validation->set_rules('spesialis', 'spesialis', 'required');
		$this->form_validation->set_rules('harga_layanan', 'Harga Layanan', 'required');
		$this->form_validation->set_rules('jam_praktek', 'Jam Praktek', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="help-block">', '</span></small>');

		if ($this->form_validation->run() == FALSE ) {
			$this->template->load('template', 'tambah_datadokter', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->dokter_m->add($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('datadokter')."';</script>";
		}
    }
    
    public function edit($id)
	{	
		$this->form_validation->set_rules('kodedokter', 'Kode', 'required');
		$this->form_validation->set_rules('nama_dokter', 'Nama', 'required');
		$this->form_validation->set_rules('spesialis', 'Spesialis', 'required');
		$this->form_validation->set_rules('harga_layanan', 'Harga Layanan', 'required');
		$this->form_validation->set_rules('jam_praktek', 'Jam Praktek', 'required');
		

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="help-block">', '</span></small>');
		
		if ($this->form_validation->run() == FALSE ) {
			$query = $this->dokter_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'edit_datadokter', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('datadokter')."';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->dokter_m->edit($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('datadokter')."';</script>";
		}
    }
    
    public function hapus()
	{
		$id = $this->input->post('id_dokter');
		$this->dokter_m->hapus($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('datadokter')."';</script>";
	}

	function print_laporan_datadokter(){
		$data['row'] = $this->dokter_m->get();
		$this->load->view('cetak/cetak_laporan_datadokter', $data);
	}

	public function form_laporan_dokter(){
		$this->template->load('template', 'form_cetak/form_cetakdatadokter');
	}

	function filter(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$nilaifilter = $this->input->post('nilaifilter');

		if ($nilaifilter == 1) {
			$data['subtitle'] = "Dari tanggal : ".indo_date($tanggalawal).' Sampai tanggal : '.indo_date($tanggalakhir);
			$data['datafilter'] = $this->dokter_m->filterbytanggal($tanggalawal,$tanggalakhir);

			$this->load->view('cetak/cetak_laporan_datadokter', $data);
		}
	}

}