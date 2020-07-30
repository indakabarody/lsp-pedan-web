<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Visi_Misi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visi_Misi_Model');
        $this->load->model('Login_Model');
        
        if (!$this->Login_Model->isLogin()) {
            return redirect(base_url() . "login");
        }
    }
    
    public function index()
    {
        if ($this->input->post('submit')) {
            $visi_misi = array(
                'text' => $this->input->post('text')
            );
            if ($this->Visi_Misi_Model->get_data_count() == 0) {
                $visi_misi['id_visi_misi'] = uniqid();
                $this->Visi_Misi_Model->add_data($visi_misi);
                redirect(base_url() . 'admin/visi-misi');
            } else {
                $id = $this->Visi_Misi_Model->get_data_row();
                $this->Visi_Misi_Model->update_data($id['id_visi_misi'], $visi_misi);
                redirect(base_url() . 'admin/visi-misi');
            }
        }
        $data['judul']  = "Visi Misi";
        $data['asset2'] = base_url() . "asset2/";
        $data['data']   = $this->Visi_Misi_Model->get_data_row();
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/Visi_Misi');
        $this->load->view('admin/template/Footer');
    }
}
