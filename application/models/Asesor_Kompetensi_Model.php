<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesor_Kompetensi_Model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('asesor_kompetensi')->result_array();
	}
	
    public function get_data_where_row($x, $y)
    {
        return $this->db->where($x, $y)->get('asesor_kompetensi')->row_array();
	}
	
    public function get_data_count()
    {
        return $this->db->get('asesor_kompetensi')->num_rows();
	}
	
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('asesor_kompetensi')->result_array();
	}
	
    public function get_data_where_count($x, $y)
    {
        return $this->db->where($x, $y)->get('asesor_kompetensi')->num_rows();
	}
	
    public function get_data_order($x, $y)
    {
        return $this->db->order_by($x, $y)->get('asesor_kompetensi')->result_array();
	}

	public function get_data_with_kompetensi_all()
    {
		$this->db->select('asesor_kompetensi.*, kompetensi.kompetensi, kompetensi.kompetensi_short')
					->from('asesor_kompetensi')
					->join('kompetensi', 'kompetensi.id_kompetensi = asesor_kompetensi.id_kompetensi')
					->order_by('asesor_kompetensi.nama', 'asc');
        return $this->db->get()->result_array();
	}
	
    public function get_data_limit($x, $y)
    {
        return $this->db->where('enabled', '1')->get('asesor_kompetensi', $x, $y)->result_array();
	}
	
    public function add_data($x)
    {
        return $this->db->insert('asesor_kompetensi', $x);
	}
	
    public function update_data($w, $x, $y)
    {
        return $this->db->where($w, $x)->update('asesor_kompetensi', $y);
	}
	
    public function delete_data($x, $y)
    {
        return $this->db->where($x, $y)->delete('asesor_kompetensi');
    }
}
