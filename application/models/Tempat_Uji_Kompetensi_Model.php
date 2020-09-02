<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_Uji_Kompetensi_Model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('tempat_uji_kompetensi')->result_array();
	}
	
    public function get_data_count()
    {
        return $this->db->get('tempat_uji_kompetensi')->num_rows();
	}
	
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('tempat_uji_kompetensi')->result_array();
	}
	
    public function get_data_order($x, $y)
    {
        return $this->db->order_by($x, $y)->get('tempat_uji_kompetensi')->result_array();
	}

    public function add_data($x)
    {
        return $this->db->insert('tempat_uji_kompetensi', $x);
	}
	
    public function update_data($w, $x, $y)
    {
        return $this->db->where($w, $x)->update('tempat_uji_kompetensi', $y);
	}
	
    public function delete_data($x, $y)
    {
        return $this->db->where($x, $y)->delete('tempat_uji_kompetensi');
    }
}
