<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halamanutama extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('dokter_m');
	}
	
	public function index()
	{
		$data['row'] = $this->dokter_m->get();
		$this->load->view('halamanutama', $data);
	}
}
