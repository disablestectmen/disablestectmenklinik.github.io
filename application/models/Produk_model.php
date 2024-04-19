<?php

class Produk_model extends CI_Model
{
    /**
     * produk
     */
    
    public function get_all_data()
    {
        return $this->db->get('produk');
    }

    public function get_data_by_id($id_produk)
    {
        $this->db->where('id', $id_produk);
        return $this->db->get('produk');
    }

    public function get_produk($limit, $start, $value = null){

        if($value){
            $this->db->like('id', $value);
        }

        // $this->db->where('id', $value);
        return $this->db->get('produk', $limit, $start);
    }

    public function count_produk($limit, $start, $value = null){

        if($value){
            $this->db->like('id', $value);
        }

        $this->db->limit($limit, $start);
        return $this->db->count_all_results('produk');
    }

    public function count_all_produk($value = null){

        if($value){
            $this->db->like('id', $value);
        }
        return $this->db->count_all_results('produk');
    }
    
    /** ====================== akhir produk ==============================*/

    /**
     * produk penjualan
     */

    public function data_penjualan_list(){
        $data = $this->db->get('list_penjualan');
        return $data->result();
    }

    public function get_produk_list_by_id($id){
        $this->db->where('id', $id);
        $data = $this->db->get('list_penjualan');
        return $data; 
    }

    public function get_jenis_kelamin(){
        $data = $this->db->get('kelamin');
        return $data; 
    }

     /**====================== akhir produk penjualan =======================*/
}
