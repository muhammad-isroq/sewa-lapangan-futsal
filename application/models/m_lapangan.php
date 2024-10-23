<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_lapangan extends CI_Model {

	function tampil_data(){
		return $this->db->get('lapangan');
	}

	function insert_data($data){
		return $this->db->insert('lapangan', $data);
	}

	function edit_data($where){
		return $this->db->get_where('lapangan', $where);	
	}

	function update_data($data, $where){
		$this->db->where($where);
		$this->db->update('lapangan', $data);
	}

	function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('lapangan');
	}

}
