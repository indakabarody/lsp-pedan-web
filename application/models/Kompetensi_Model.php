<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetensi_Model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('kompetensi')->result_array();
	}
	
    public function get_data_where_row($x, $y)
    {
        return $this->db->where($x, $y)->get('kompetensi')->row_array();
	}
	
    public function get_data_count()
    {
        return $this->db->get('kompetensi')->num_rows();
	}
	
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('kompetensi')->result_array();
	}
	
    public function get_data_order($x, $y)
    {
        return $this->db->order_by($x, $y)->get('kompetensi')->result_array();
	}
	
    public function get_data_limit($x, $y)
    {
        return $this->db->order_by('tanggal', 'DESC')->get('kompetensi', $x, $y)->result_array();
	}
	
    public function add_data($x)
    {
        return $this->db->insert('kompetensi', $x);
	}
	
    public function update_data($x, $y)
    {
        return $this->db->where('id_kompetensi', $x)->update('kompetensi', $y);
	}
	
    public function delete_data($x, $y)
    {
        return $this->db->where($x, $y)->delete('kompetensi');
    }
}
