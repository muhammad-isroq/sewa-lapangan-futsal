<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_penyewa extends CI_Model {

	function tampil_data(){
		return $this->db->get('penyewa');
	}

	function insert_data($data){
		return $this->db->insert('penyewa', $data);
	}

	function edit_data($where){
		return $this->db->get_where('penyewa', $where);	
	}

	function update_data($data, $where){
		$this->db->where($where);
		$this->db->update('penyewa', $data);
	}

	function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('penyewa');
	}
}
