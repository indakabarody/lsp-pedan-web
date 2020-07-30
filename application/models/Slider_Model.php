<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_Model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('slider')->result_array();
	}
	
    public function get_data_where_row($x, $y)
    {
        return $this->db->where($x, $y)->get('slider')->row_array();
	}
	
    public function get_data_count()
    {
        return $this->db->get('slider')->num_rows();
	}
	
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('slider')->result_array();
	}
	
    public function get_data_order($x, $y)
    {
        return $this->db->order_by($x, $y)->get('slider')->result_array();
	}
	
    public function get_data_limit($x, $y)
    {
        return $this->db->order_by('tanggal', 'DESC')->get('slider', $x, $y)->result_array();
	}
	
    public function add_data($x)
    {
        return $this->db->insert('slider', $x);
	}
	
    public function update_data($x, $y)
    {
        return $this->db->where('id_slider', $x)->update('slider', $y);
	}
	
    public function delete_data($x, $y)
    {
        return $this->db->where($x, $y)->delete('slider');
    }
}
