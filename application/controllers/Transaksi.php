<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    function __construct(){
        parent::__construct();
    
        if(empty($this->session->userdata('login'))){
            redirect('Auth');
        }

        $this->load->model('m_user');
        $this->load->model('m_lapangan');
        $this->load->model('m_penyewa');
        $this->load->model('m_transaksi');
    }

	public function index()
	{
        $data['title'] = 'Manajemen Data Transaksi';

        $data['transaksi'] = $this->m_transaksi->tampil_data()->result_array();

		$this->load->view('v_header', $data);
        $this->load->view('transaksi/v_data', $data);
        $this->load->view('v_footer');
        
	}  

    public function tambah(){
        $data['title'] = 'Tambah Data Transaksi';

        $data['penyewa'] = $this->m_penyewa->tampil_data()->result_array();
        $data['lapangan'] = $this->m_lapangan->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('transaksi/v_data_tambah', $data);
        $this->load->view('v_footer');
    }

    public function insert(){
        $tgl    = $this->input->post('tgl_sewa');
        $penyewa = $this->input->post('penyewa');
        $lapangan = $this->input->post('lapangan');

        $data = array(
            'tgl_sewa' => $tgl,
            'id_penyewa' => $penyewa,
            'id_lapangan' => $lapangan
        );

        $this->m_transaksi->insert_data($data);      
        
        redirect('Transaksi');
    }

    public function edit($id){
        $data['title'] = 'Edit Data Transaksi';

        $where = array('id_transaksi' => $id);
        $data['edit'] = $this->m_transaksi->edit_data($where)->row_array();

        $data['penyewa'] = $this->m_penyewa->tampil_data()->result_array();
        $data['lapangan'] = $this->m_lapangan->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('transaksi/v_data_edit', $data);
        $this->load->view('v_footer');
    }

    public function update(){
        $id     = $this->input->post('id');
        $tgl    = $this->input->post('tgl_sewa');
        $penyewa = $this->input->post('penyewa');
        $lapangan = $this->input->post('lapangan');

        $data = array(
            'tgl_sewa' => $tgl,
            'id_penyewa' => $penyewa,
            'id_lapangan' => $lapangan
        );

        $where = array('id_transaksi' => $id);
        $this->m_transaksi->update_data($data, $where);      
        
        redirect('Transaksi');
    }

    public function hapus($id){
        $where = array('id_transaksi' => $id);
        $this->m_transaksi->hapus_data($where);      
        
        redirect('Transaksi');
    }
    
    // fungsi untuk rekam medis
    function rekam($id){
        $data['title'] = "Rekam Transaksi";

        //tampilkan detail rekam medis
        $data['d'] = $this->m_transaksi->tampil_rm($id)->row_array();

        // untuk menampilkan riwayat kunjungan
        $q = $this->db->query("SELECT id_penyewa FROM transaksi 
                               WHERE id_transaksi='$id'")->row_array();
        $id_penyewa = $q['id_penyewa'];
        $data['riwayat'] = $this->m_transaksi->tampil_riwayat($id_penyewa)
                           ->result_array();
        

        $this->load->view('v_header', $data);
        $this->load->view('transaksi/v_rekam_transaksi', $data);
        $this->load->view('v_footer');
    }

    function insert_rm(){
        $id_transaksi = $this->input->post('id');
        $nama_lapangan = $this->input->post('nama_lapangan');
        $harga = $this->input->post('harga');
        $waktu = $this->input->post('waktu');

        $data = array(
            'nama_lapangan' => $nama_lapangan,
            'harga' => $harga,
            'waktu' => $waktu
        );

        $where = array('id_transaksi'=>$id_transaksi);

        $this->m_transaksi->update_data($data, $where);

        redirect('transaksi/rekam/'.$id_transaksi);
    }

    

}
