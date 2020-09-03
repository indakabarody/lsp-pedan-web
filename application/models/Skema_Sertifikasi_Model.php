<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skema_Sertifikasi_Model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('skema_sertifikasi')->result_array();
	}
	
    public function get_data_count()
    {
        return $this->db->get('skema_sertifikasi')->num_rows();
	}
	
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('skema_sertifikasi')->result_array();
	}
	
    public function get_data_order($x, $y)
    {
        return $this->db->order_by($x, $y)->get('skema_sertifikasi')->result_array();
	}
	
    public function get_data_with_kompetensi_all()
    {
		$this->db->select('skema_sertifikasi.*, kompetensi.kompetensi, kompetensi.kompetensi_short')
					->from('skema_sertifikasi')
					->join('kompetensi', 'kompetensi.id_kompetensi = skema_sertifikasi.id_kompetensi')
					->order_by('skema_sertifikasi.nama_skema', 'asc');
        return $this->db->get()->result_array();
	}

    public function add_data($x)
    {
        return $this->db->insert('skema_sertifikasi', $x);
	}
	
    public function update_data($w, $x, $y)
    {
        return $this->db->where($w, $x)->update('skema_sertifikasi', $y);
	}
	
    public function delete_data($x, $y)
    {
        return $this->db->where($x, $y)->delete('skema_sertifikasi');
    }
}
