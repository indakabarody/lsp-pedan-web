<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_Organisasi_Model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('struktur_organisasi')->result_array();
	}
	
    public function get_data_where_row($x, $y)
    {
        return $this->db->where($x, $y)->get('struktur_organisasi')->row_array();
	}
	
    public function get_data_count()
    {
        return $this->db->get('struktur_organisasi')->num_rows();
	}
	
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('struktur_organisasi')->result_array();
	}
	
    public function get_data_where_count($x, $y)
    {
        return $this->db->where($x, $y)->get('struktur_organisasi')->num_rows();
	}
	
    public function get_data_order($x, $y)
    {
        return $this->db->order_by($x, $y)->get('struktur_organisasi')->result_array();
	}
	
    public function get_data_limit($x, $y)
    {
        return $this->db->where('enabled', '1')->get('struktur_organisasi', $x, $y)->result_array();
	}
	
    public function add_data($x)
    {
        return $this->db->insert('struktur_organisasi', $x);
	}
	
    public function update_data($x, $y)
    {
        return $this->db->where('id_struktur_organisasi', $x)->update('struktur_organisasi', $y);
	}
	
    public function delete_data($x, $y)
    {
        return $this->db->where($x, $y)->delete('struktur_organisasi');
    }
}
