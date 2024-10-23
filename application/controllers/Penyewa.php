<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewa extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}

		$this->load->model('m_penyewa');
	}

	public function index() //function index adalah function yg pertama kali diakses
	{
		$data['title'] = 'Manajemen Data Penyewa';

		$data['penyewa'] = $this->m_penyewa->tampil_data()->result_array();

		$this->load->view('v_header', $data);
		$this->load->view('penyewa/v_penyewa', $data);
		$this->load->view('v_footer');
		}

	public function tambah()
	{
		$data['title'] = 'Tambah Data Penyewa';

		$this->load->view('v_header', $data);
		$this->load->view('penyewa/v_penyewa_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert()
	{
		$u = $this->input->POST('nama_penyewa');
		$n = $this->input->POST('no_hp');
	

		$data = array(
				'nama_penyewa' => $u,
				'no_hp' => $n,

			);

		$this->m_penyewa->insert_data($data);

		redirect('Penyewa');
	}
	public function edit($id)
	{
		$data['title'] = 'Ubah Data Penyewa';

		$where = array('id_penyewa' => $id);
		$data['r'] = $this->m_penyewa->edit_data($where)->row_array();

		$this->load->view('v_header', $data);
		$this->load->view('penyewa/v_penyewa_ubah', $data);
		$this->load->view('v_footer');	
	}

	public function update()
	{
		$id = $this->input->POST('id_penyewa');
		$u = $this->input->POST('nama_penyewa');
		$n = $this->input->POST('no_hp');


		$data = array(
				'nama_penyewa' => $u,
				'no_hp' => $n,

			);


		$where = array('id_penyewa' => $id);
		$this->m_penyewa->update_data($data, $where);

		redirect('Penyewa');	
	}

	public function hapus($id)
	{
		$where = array('id_penyewa' => $id);
		$this->m_penyewa->hapus_data($where);

		redirect('Penyewa');
	}

}

//jika ingin meload data array dari database, harus sama. Jika tidak akan error