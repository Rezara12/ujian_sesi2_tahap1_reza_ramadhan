<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'id_user' => $row->id_user,
					'id_dokter' => $row->id_dokter,
					'level' => $row->level,
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, login berhasil');
					window.location='".site_url('dashboard')."';
				</script>";
			} else {
				echo "<script>
					alert('Maaf, login tidak berhasil');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('id_user', 'level');
		$this->session->unset_userdata($params);
		redirect('');
	}
}
