<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemegang_Sertifikat_Model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('pemegang_sertifikat')->result_array();
	}
	
    public function get_data_count()
    {
        return $this->db->get('pemegang_sertifikat')->num_rows();
	}
	
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('pemegang_sertifikat')->result_array();
	}
	
    public function get_data_order($x, $y)
    {
        return $this->db->order_by($x, $y)->get('pemegang_sertifikat')->result_array();
	}
	
    public function get_data_with_skema_sertifikasi_all()
    {
		$this->db->select('pemegang_sertifikat.*, skema_sertifikasi.nama_skema')
					->from('pemegang_sertifikat')
					->join('skema_sertifikasi', 'skema_sertifikasi.id_skema_sertifikasi = pemegang_sertifikat.id_skema_sertifikasi')
					->order_by('pemegang_sertifikat.nama_pemegang', 'asc');
        return $this->db->get()->result_array();
	}

    public function add_data($x)
    {
        return $this->db->insert('pemegang_sertifikat', $x);
	}
	
    public function update_data($w, $x, $y)
    {
        return $this->db->where($w, $x)->update('pemegang_sertifikat', $y);
	}
	
    public function delete_data($x, $y)
    {
        return $this->db->where($x, $y)->delete('pemegang_sertifikat');
    }
}
