<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Asesor_Kompetensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Asesor_Kompetensi_Model');
        $this->load->model('Kompetensi_Model');
        $this->load->model('Login_Model');
        
        if (!$this->Login_Model->isLogin() || $this->session->role != 'admin') {
            return redirect(base_url() . "login");
        }
    }
    
    public function index()
    {
        $data['judul']             = 'Asesor Kompetensi';
        $data['asesor_kompetensi'] = $this->Asesor_Kompetensi_Model->get_data_with_kompetensi_all();
        $data['asset2']            = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/asesor_kompetensi/Asesor_Kompetensi');
        $this->load->view('admin/template/Footer');
    }
    
    public function tambah()
    {
        $this->form_validation->set_rules('id_kompetensi', 'Kompetensi', 'required');
        $this->form_validation->set_rules('nama', 'Nama asesor', 'required');
        $this->form_validation->set_rules('no_registrasi', 'No registrasi', 'required');
        $this->form_validation->set_rules('asal_sekolah', 'Asal sekolah', 'required');
        
        if ($this->form_validation->run() === true) {
            $data = array(
                'id_asesor_kompetensi' => uniqid(),
                'id_kompetensi' => $this->input->post('id_kompetensi'),
                'nama' => ucwords(reduce_multiples($this->input->post('nama'), " ")),
                'no_registrasi' => $this->input->post('no_registrasi'),
                'asal_sekolah' => $this->input->post('asal_sekolah')
            );
            
            $this->Asesor_Kompetensi_Model->add_data($data);
            redirect(base_url() . "admin/asesor-kompetensi");
        }
        
        $data['judul']      = "Tambah Asesor Kompetensi";
        $data['kompetensi'] = $this->Kompetensi_Model->get_data();
        $data['asset2']     = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/asesor_kompetensi/Asesor_Kompetensi-Tambah');
        $this->load->view('admin/template/Footer');
    }
    
    public function edit($id = NULL)
    {
        if ((!$id == NUll) && ($this->Asesor_Kompetensi_Model->get_data_where("id_asesor_kompetensi", $id))) {
            $this->form_validation->set_rules('id_kompetensi', 'Kompetensi', 'required');
            $this->form_validation->set_rules('nama', 'Nama asesor', 'required');
            $this->form_validation->set_rules('no_registrasi', 'No registrasi', 'required');
            $this->form_validation->set_rules('asal_sekolah', 'Asal sekolah', 'required');
            
            if ($this->form_validation->run() === true) {
                $data = array(
                    'id_kompetensi' => $this->input->post('id_kompetensi'),
                    'nama' => ucwords(reduce_multiples($this->input->post('nama'), " ")),
                    'no_registrasi' => $this->input->post('no_registrasi'),
                    'asal_sekolah' => $this->input->post('asal_sekolah')
                );
                
                $this->Asesor_Kompetensi_Model->update_data('id_asesor_kompetensi', $id, $data);
                redirect(base_url() . "admin/asesor-kompetensi");
            }
            
            $data['judul']      = "Edit Asesor Kompetensi";
            $data['asset2']     = base_url() . "asset2/";
            $data['data']       = $this->Asesor_Kompetensi_Model->get_data_where('id_asesor_kompetensi', $id);
            $data['kompetensi'] = $this->Kompetensi_Model->get_data();
            $this->load->view('admin/template/Header', $data);
            $this->load->view('admin/asesor_kompetensi/Asesor_Kompetensi-Edit');
            $this->load->view('admin/template/Footer');
        } else {
            redirect(base_url() . "admin");
        }
    }
    
    public function hapus($id = NULL)
    {
        if ((!$id == NUll) && ($this->Asesor_Kompetensi_Model->get_data_where("id_asesor_kompetensi", $id))) {
            $this->Asesor_Kompetensi_Model->delete_data("id_asesor_kompetensi", $id);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect(base_url() . "admin");
        }
    }
}
