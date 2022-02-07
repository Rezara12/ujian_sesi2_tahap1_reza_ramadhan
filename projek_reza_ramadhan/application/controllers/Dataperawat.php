<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataperawat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model(['perawat_m', 'dokter_m']);
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->perawat_m->get();
		$this->template->load('template', 'dataperawat', $data);
    }

    public function tambah()
	{
        $dokter = $this->dokter_m->get();
		$data = [
					'dokter' => $dokter,
				];
        
		$this->form_validation->set_rules('nama_user', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_kelamin_user', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required|is_unique[tabel_user.id_dokter]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[tabel_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

		$this->form_validation->set_error_delimiters('<small><span class="help-block">', '</span></small>');

		if ($this->form_validation->run() == FALSE ) {
			$this->template->load('template', 'tambah_dataperawat', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->perawat_m->add($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('dataperawat')."';</script>";
		}
	}
	
	public function edit($id)
	{	
		$dokter = $this->dokter_m->get();
		$data = [
					'dokter' => $dokter,
				];
        
		$this->form_validation->set_rules('nama_user', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_kelamin_user', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
		if($this->input->post('password')) {
		$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]', array('matches' => '%s tidak sesuai dengan password'));
		}
		if($this->input->post('passconf')) {
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]', array('matches' => '%s tidak sesuai dengan password'));
			}

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

		$this->form_validation->set_error_delimiters('<small><span class="help-block">', '</span></small>');

		if ($this->form_validation->run() == FALSE ) {
			$query = $this->perawat_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'edit_dataperawat', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('dataperawat')."';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->perawat_m->edit($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('dataperawat')."';</script>";
		}
	}
	function username_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM tabel_user WHERE username =  '$post[username]' AND id_user != '$post[id_user]'");
		if($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id_user');
		$this->perawat_m->hapus($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script>alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('dataperawat')."';</script>";
	}

}