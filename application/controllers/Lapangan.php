<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}

		$this->load->model('m_lapangan');
	}

	public function index() //function index adalah function yg pertama kali diakses
	{
		$data['title'] = 'Manajemen Data Lapangan';

		$data['lapangan'] = $this->m_lapangan->tampil_data()->result_array();

		$this->load->view('v_header', $data);
		$this->load->view('lapangan/v_lapangan', $data);
		$this->load->view('v_footer');
		}

	public function tambah()
	{

		$data['title'] = 'Tambah Lapangan';

		$this->load->view('v_header', $data);
		$this->load->view('lapangan/v_lapangan_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert()
	{
		$u = $this->input->POST('nama_lapangan');



		$data = array(
				'nama_lapangan' => $u
			);
		

		$this->m_lapangan->insert_data($data);

		redirect('Lapangan');
	}
	public function edit($id)
	{
		$data['title'] = 'ubah Data Lapangan';

		$where = array('id_lapangan' => $id);
		$data['r'] = $this->m_lapangan->edit_data($where)->row_array();

		$this->load->view('v_header', $data);
		$this->load->view('lapangan/v_lapangan_ubah', $data);
		$this->load->view('v_footer');	
	}

	public function update()
	{
		$id = $this->input->POST('id_lapangan');
		$u = $this->input->POST('nama_lapangan');



		$data = array(
				'nama_lapangan' => $u
			);


		$where = array('id_lapangan' => $id);
		$this->m_lapangan->update_data($data, $where);

		redirect('Lapangan');	
	}

	public function hapus($id)
	{
		$where = array('id_lapangan' => $id);
		$this->m_lapangan->hapus_data($where);

		redirect('Lapangan');
	}

}
