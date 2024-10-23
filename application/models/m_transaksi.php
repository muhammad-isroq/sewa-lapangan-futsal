<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_transaksi extends CI_Model {

    function tampil_data(){
       //return $this->db->get('transaksi');

       $query = $this->db->query("SELECT transaksi.*, 
                            penyewa.nama_penyewa,
                            penyewa.no_hp,
                            lapangan.nama_lapangan
                        FROM transaksi
                        INNER JOIN penyewa ON 
                        penyewa.id_penyewa = transaksi.id_penyewa
                        INNER JOIN lapangan ON 
                        lapangan.id_lapangan = transaksi.id_lapangan");

        return $query;
    }

    function insert_data($data){
        return $this->db->insert('transaksi', $data);

    }

    function edit_data($where){
        return $this->db->get_where('transaksi', $where);

    }

    function update_data($data, $where){
        $this->db->where($where);
        return $this->db->update('transaksi', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('transaksi');
    }

    function tampil_rm($id){
        $query = $this->db->query("SELECT transaksi.*, 
                            penyewa.nama_penyewa,
                            penyewa.no_hp,
                            lapangan.nama_lapangan
                        FROM transaksi
                        INNER JOIN penyewa ON 
                        penyewa.id_penyewa = transaksi.id_penyewa
                        INNER JOIN lapangan ON 
                        lapangan.id_lapangan = transaksi.id_lapangan
                        WHERE transaksi.id_transaksi = '$id'");

        return $query;
    }

    function tampil_riwayat($penyewa){
        $query = $this->db->query("SELECT transaksi.*, 
                            penyewa.nama_penyewa,
                            penyewa.no_hp,
                            lapangan.nama_lapangan
                        FROM transaksi
                        INNER JOIN penyewa ON 
                        penyewa.id_penyewa = transaksi.id_penyewa
                        INNER JOIN lapangan ON 
                        lapangan.id_lapangan = transaksi.id_lapangan
                        WHERE transaksi.id_penyewa = '$penyewa'");

        return $query;
    }

        
}
