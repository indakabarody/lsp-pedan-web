<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_Model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('profil', 1, 0)->row_array();
	}
	
    public function get_data_row()
    {
        return $this->db->get('profil', 1, 0)->row_array();
	}
	
    public function get_data_count()
    {
        return $this->db->get('profil')->num_rows();
	}
	
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('profil')->result_array();
	}
	
    public function get_data_order($x, $y)
    {
        return $this->db->order_by($x, $y)->get('profil')->result_array();
	}
	
    public function get_data_limit($x, $y)
    {
        return $this->db->order_by('tanggal', 'DESC')->get('profil', $x, $y)->result_array();
	}
	
    public function add_data($x)
    {
        return $this->db->insert('profil', $x);
	}
	
    public function update_data($x, $y)
    {
        return $this->db->where('id_profil', $x)->update('profil', $y);
	}
	
    public function delete_data($x, $y)
    {
        return $this->db->where($x, $y)->delete('profil');
    }
}
