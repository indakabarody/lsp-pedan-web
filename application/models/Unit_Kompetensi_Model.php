<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_Kompetensi_Model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('unit_kompetensi')->result_array();
	}
	
    public function get_data_where_row($x, $y)
    {
        return $this->db->where($x, $y)->get('unit_kompetensi')->row_array();
	}
	
    public function get_data_count()
    {
        return $this->db->get('unit_kompetensi')->num_rows();
	}
	
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('unit_kompetensi')->result_array();
	}
	
    public function get_data_order($x, $y)
    {
        return $this->db->order_by($x, $y)->get('unit_kompetensi')->result_array();
	}
	
    public function get_data_limit($x, $y)
    {
        return $this->db->order_by('tanggal', 'DESC')->get('unit_kompetensi', $x, $y)->result_array();
	}
	
    public function add_data($x)
    {
        return $this->db->insert('unit_kompetensi', $x);
	}
	
    public function update_data($x, $y)
    {
        return $this->db->where('id_unit_kompetensi', $x)->update('unit_kompetensi', $y);
	}
	
    public function delete_data($x, $y)
    {
        return $this->db->where($x, $y)->delete('unit_kompetensi');
    }
}
