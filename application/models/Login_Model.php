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
    
    public function get_data()
    {
        return $this->db->get('admin')->result_array();
    }
    
    public function get_data_where($x, $y)
    {
        return $this->db->where($x, $y)->get('admin')->result_array();
    }
    
    public function get_data_where_row($x, $y)
    {
        return $this->db->where($x, $y)->get('admin')->row_array();
    }
}
