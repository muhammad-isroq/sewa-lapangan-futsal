<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis halaman login ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}

		$this->load->model('m_user');
		$this->load->model('m_lapangan');
		$this->load->model('m_penyewa');

	}

	public function index()	{

		redirect('Dashboard');
	}

	public function data_user() {
		$data['title'] = 'Laporan Data User';

		$data['user'] = $this->m_user->tampil_data()->result_array();

		$this->load->view('Laporan/v_lap_user', $data);
	}

	public function data_lapangan() {
		$data['title'] = 'Laporan Data lapangan';

		$data['lapangan'] = $this->m_lapangan->tampil_data()->result_array();

		$this->load->view('Laporan/v_lap_lapangan', $data);
	}

	public function data_penyewa() {
		$data['title'] = 'Laporan Data penyewa';

		$data['penyewa'] = $this->m_penyewa->tampil_data()->result_array();

		$this->load->view('Laporan/v_lap_penyewa', $data);
	}
}
