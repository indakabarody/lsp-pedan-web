<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_Model');
        $this->load->model('Login_Model');
        
        if (!$this->Login_Model->isLogin() || $this->session->role != 'admin') {
            return redirect(base_url() . "login");
        }
    }
    
    public function index()
    {
        if ($this->input->post('submit')) {
            $profil = array(
                'text' => $this->input->post('text')
            );
            if ($this->Profil_Model->get_data_count() == 0) {
                $profil['id_profil'] = uniqid();
                $this->Profil_Model->add_data($profil);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $id = $this->Profil_Model->get_data_row();
                $this->Profil_Model->update_data($id['id_profil'], $profil);
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        $data['judul']  = "Profil";
        $data['asset2'] = base_url() . "asset2/";
        $data['data']   = $this->Profil_Model->get_data_row();
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/Profil');
        $this->load->view('admin/template/Footer');
    }
}
