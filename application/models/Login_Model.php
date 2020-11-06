<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model
{
    public function isLogin()
    {
        if ($this->session->login) {
            return true;
        }
        return false;
    }
    
    public function get_data_admin()
    {
        return $this->db->get('admin')->result_array();
	}
	
	public function get_data_asesor()
    {
        return $this->db->get('asesor_kompetensi')->result_array();
	}
	
	public function get_data_peserta()
    {
        return $this->db->get('peserta')->result_array();
    }
    
    public function get_data_admin_where($x, $y)
    {
        return $this->db->where($x, $y)->get('admin')->result_array();
	}

	public function get_data_asesor_where($x, $y)
    {
        return $this->db->where($x, $y)->get('asesor_kompetensi')->result_array();
	}

	public function get_data_peserta_where($x, $y)
    {
        return $this->db->where($x, $y)->get('peserta')->result_array();
	}
	
	public function get_data_admin_num_rows($x, $y)
    {
        return $this->db->where($x, $y)->get('admin')->num_rows();
	}
	
	public function get_data_asesor_num_rows($x, $y)
    {
        return $this->db->where($x, $y)->get('asesor_kompetensi')->num_rows();
	}
	
	public function get_data_peserta_num_rows($x, $y)
    {
        return $this->db->where($x, $y)->get('peserta')->num_rows();
    }
    
    public function get_data_admin_where_row($x, $y)
    {
        return $this->db->where($x, $y)->get('admin')->row_array();
	}
	
	public function get_data_asesor_where_row($x, $y)
    {
        return $this->db->where($x, $y)->get('asesor_kompetensi')->row_array();
	}
	
	public function get_data_peserta_where_row($x, $y)
    {
        return $this->db->where($x, $y)->get('peserta')->row_array();
    }
}
