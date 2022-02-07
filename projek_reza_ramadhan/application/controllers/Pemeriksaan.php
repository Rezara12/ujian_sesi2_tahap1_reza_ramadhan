<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['pasien_m', 'dokter_m', 'rawatjalan_m', 'pemeriksaan_m', 'obat_m']);
	}
	
	public function daftar()
	{
		$data['row'] = $this->rawatjalan_m->get_antrian()->result();
		$this->template->load('template', 'datapemeriksaan', $data);
    }
    
    public function proses($id)
	{	
		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE ) {
			$query = $this->pemeriksaan_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'tambah_datapemeriksaan', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('pemeriksaan')."';</script>";
			}
			
		} else {
			$post = $this->input->post(null, TRUE);
			$this->pemeriksaan_m->tambah_datapemeriksaan($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('datapasien')."';</script>";;
		}
    }

    public function tambah()
	{
		if(isset($_POST['tambah_rawatjalan'])) {
			$post = $this->input->post(null, TRUE);
			$this->pemeriksaan_m->tambah_datapemeriksaan($post);

			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('pemeriksaan/hasil')."';</script>";
		}
    }
    
    public function hasil()
    {
		
        $data['row'] = $this->pemeriksaan_m->get_pemeriksaan()->result();
		$this->template->load('template', 'datahasilpemeriksaan', $data);
	}
	
	public function hapus()
	{
		$id = $this->input->post('id_layanan');
		$this->pemeriksaan_m->hapus($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('pemeriksaan/hasil')."';</script>";
	}

	public function detail()
	{
		$idu1					= $this->uri->segment(3);
		$obat					= $this->obat_m->get()->result();
		$resep					= $this->db->query("SELECT * FROM tabel_resep where id_layanan= '$idu1' ")->result();
		$data 					= ['obat' => $obat,
									'data_tabel' => $resep,
									];
		if(isset($_POST['tambah_resepobat'])) {
			$post = $this->input->post(null, TRUE);
			$this->pemeriksaan_m->tambah_resepobat($post);
			if($this->db->affected_rows() > 0) 
			$idu1					= $this->uri->segment(3);
			echo "<script>window.location='".site_url('pemeriksaan/detail/'.$idu1)."';</script>";
		}
		if(isset($_POST['hapus_resepobat'])) {
			$id = $this->input->post('id_resep');
			$this->pemeriksaan_m->hapusresep($id);
			if($this->db->affected_rows() > 0) 
			$idu1					= $this->uri->segment(3);
			echo "<script>window.location='".site_url('pemeriksaan/detail/'.$idu1)."';</script>";
		}
		$this->template->load('template', 'tambah_resepobat', $data);

	}

	public function form_laporan_bpjs(){
		$dokter = $this->dokter_m->get();
		$data = [
					'dokter' => $dokter,
				];
		$this->template->load('template', 'form_cetak/form_cetakhasilbpjs', $data);
	}

	public function form_laporan_umum(){
		$dokter = $this->dokter_m->get();
		$data = [
					'dokter' => $dokter,
				];
		$this->template->load('template', 'form_cetak/form_cetakhasilumum', $data);
	}

	function filterumum(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$nilaifilter = $this->input->post('nilaifilter');
		$nama_dokter = $this->input->post('nama_dokter');

		if ($nilaifilter == 1) {
			$data['subtitle'] = "Dari tanggal : ".indo_date($tanggalawal).' Sampai tanggal : '.indo_date($tanggalakhir);
			$data['dokter'] = $this->input->post('nama_dokter');
			$data['datafilter'] = $this->pemeriksaan_m->filterbytanggalumum($tanggalawal,$tanggalakhir,$nama_dokter);

			$this->load->view('cetak/cetak_laporan_dataumum', $data);
		}
	}

	
	function filter(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$nilaifilter = $this->input->post('nilaifilter');
		$nama_dokter = $this->input->post('nama_dokter');

		if ($nilaifilter == 1) {
			$data['subtitle'] = "Dari tanggal : ".indo_date($tanggalawal).' Sampai tanggal : '.indo_date($tanggalakhir);
			$data['dokter'] = $this->input->post('nama_dokter');
			$data['datafilter'] = $this->pemeriksaan_m->filterbytanggal($tanggalawal,$tanggalakhir,$nama_dokter);

			$this->load->view('cetak/cetak_laporan_databpjs', $data);
		}
	}

	function cetak_resep($id){
		$data['nama'] = $this->pemeriksaan_m->get_resep($id)->row();
		$data['resep'] = $this->pemeriksaan_m->get_resep($id)->result();
		$this->load->view('cetak/cetak_resep', $data);
	}

	public function hapusresep()
	{
		
		$id = $this->input->post('id_resep');
		$this->pemeriksaan_m->hapusresep($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		$idu1					= $this->uri->segment(3);
		echo "<script>window.location='".site_url('pemeriksaan/detail/'.$idu1)."';</script>";
		$this->template->load('template', 'tambah_resepobat', $data);
	}

}