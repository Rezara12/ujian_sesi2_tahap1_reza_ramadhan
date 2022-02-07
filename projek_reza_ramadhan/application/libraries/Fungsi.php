<?php 

Class Fungsi {

    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function user_login() {
        $this->ci->load->model('user_m');
        $id_user = $this->ci->session->userdata('id_user');
        $user_data = $this->ci->user_m->get($id_user)->row();
        return $user_data;
    }

    
    public function count_pasien_non() {
        $this->ci->load->model('pasien_m');
        return $this->ci->pasien_m->get_pasien_non()->num_rows();
    }
    public function count_pasien_aktif() {
        $this->ci->load->model('pasien_m');
        return $this->ci->pasien_m->get_pasien()->num_rows();
    }
    public function count_dokter() {
        $this->ci->load->model('dokter_m');
        return $this->ci->dokter_m->get()->num_rows();
    }
    public function count_rawatjalan() {
        $this->ci->load->model('rawatjalan_m');
        return $this->ci->rawatjalan_m->get_rawatjalan()->num_rows();
    }
    public function count_daftar() {
        $this->ci->load->model('rawatjalan_m');
        return $this->ci->rawatjalan_m->get_antrian()->num_rows();
    }
    public function count_hasil() {
        $this->ci->load->model('pemeriksaan_m');
        return $this->ci->pemeriksaan_m->get_pemeriksaan()->num_rows();
    }
    public function count_pembayaran() {
        $this->ci->load->model('pembayaran_m');
        return $this->ci->pembayaran_m->get_pembayaran()->num_rows();
    }
    public function count_hasilpembayaran() {
        $this->ci->load->model('pembayaran_m');
        return $this->ci->pembayaran_m->get_hasilpembayaran()->num_rows();
    }
    public function count_obat() {
        $this->ci->load->model('obat_m');
        return $this->ci->obat_m->get()->num_rows();
    }
    public function count_perawat() {
        $this->ci->load->model('perawat_m');
        return $this->ci->perawat_m->get()->num_rows();
    }
    

}