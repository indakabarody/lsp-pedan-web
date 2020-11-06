<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
        
        if (!$this->Login_Model->isLogin() || $this->session->role != 'admin') {
            return redirect(base_url() . "login");
        }
    }
    
    public function index()
    {
        $data['judul']  = "Dashboard";
        $data['asset2'] = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/Dashboard');
        $this->load->view('admin/template/Footer');
    }
}
