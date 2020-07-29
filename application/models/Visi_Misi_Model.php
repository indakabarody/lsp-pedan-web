<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_Misi_Model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('visi_misi', 1, 0)->row_array();
	}
	
    public function get_data_row()
    {
        return $this->db->get('visi_misi', 1, 0)->row_array();
	}
	
    public function get_data_count()
    {
        return $this->db->get('visi_misi')->num_rows();
	}
	
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('visi_misi')->result_array();
	}
	
    public function get_data_order($x, $y)
    {
        return $this->db->order_by($x, $y)->get('visi_misi')->result_array();
	}
	
    public function get_data_limit($x, $y)
    {
        return $this->db->order_by('tanggal', 'DESC')->get('visi_misi', $x, $y)->result_array();
	}
	
    public function add_data($x)
    {
        return $this->db->insert('visi_misi', $x);
	}
	
    public function update_data($x, $y)
    {
        return $this->db->where('id_visi_misi', $x)->update('visi_misi', $y);
	}
	
    public function delete_data($x, $y)
    {
        return $this->db->where($x, $y)->delete('visi_misi');
    }
}
