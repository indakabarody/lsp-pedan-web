<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Pemegang_Sertifikat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Pemegang_Sertifikat_Model');
		$this->load->model('Skema_Sertifikasi_Model');
        $this->load->model('Login_Model');
        if (!$this->Login_Model->isLogin()) {
            return redirect(base_url() . "admin/login");
        }
    }
    
    public function index()
    {
        $data['judul']              = 'Pemegang Sertifikat';
        $data['pemegang_sertifikat'] = $this->Pemegang_Sertifikat_Model->get_data_with_skema_sertifikasi_all();
        $data['asset2']            = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/pemegang_sertifikat/Pemegang_Sertifikat');
        $this->load->view('admin/template/Footer');
    }
    
    public function tambah()
    {
        $this->form_validation->set_rules('id_skema_sertifikasi', 'Skema Sertifikasi', 'required');
        $this->form_validation->set_rules('nama_pemegang', 'Nama Pemegang', 'required');
		$this->form_validation->set_rules('no_sertifikat', 'Nomor Sertifikat', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
        
        if ($this->form_validation->run() === true) {
            $data = array(
                'id_pemegang_sertifikat' => uniqid(),
                'id_skema_sertifikasi' => $this->input->post('id_skema_sertifikasi'),
                'nama_pemegang' => ucwords(reduce_multiples($this->input->post('nama_pemegang'), " ")),
                'no_sertifikat' => $this->input->post('no_sertifikat'),
                'tahun' => $this->input->post('tahun')
            );
            
            $this->Pemegang_Sertifikat_Model->add_data($data);
            redirect(base_url() . "admin/pemegang-sertifikat");
        }
        
		$data['judul']   = "Tambah Pemegang Sertifikat";
		$data['skema_sertifikasi'] = $this->Skema_Sertifikasi_Model->get_data();
        $data['asset2'] = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/pemegang_sertifikat/Pemegang_Sertifikat-Tambah');
        $this->load->view('admin/template/Footer');
    }
    
    public function edit($id = NULL)
    {
        if ((!$id == NUll) && ($this->Pemegang_Sertifikat_Model->get_data_where("id_pemegang_sertifikat", $id))) {
			$this->form_validation->set_rules('id_skema_sertifikasi', 'Skema Sertifikasi', 'required');
			$this->form_validation->set_rules('nama_pemegang', 'Nama Pemegang', 'required');
			$this->form_validation->set_rules('no_sertifikat', 'Nomor Sertifikat', 'required');
			$this->form_validation->set_rules('tahun', 'Tahun', 'required');
            
            if ($this->form_validation->run() === true) {
                $data = array(
					'id_skema_sertifikasi' => $this->input->post('id_skema_sertifikasi'),
					'nama_pemegang' => ucwords(reduce_multiples($this->input->post('nama_pemegang'), " ")),
					'no_sertifikat' => $this->input->post('no_sertifikat'),
					'tahun' => $this->input->post('tahun')
                );
				
                $this->Pemegang_Sertifikat_Model->update_data('id_pemegang_sertifikat', $id, $data);
                redirect(base_url() . "admin/pemegang-sertifikat");
            }
            
            $data['judul']   = "Edit Pemegang Sertifikat";
            $data['asset2'] = base_url() . "asset2/";
			$data['data']   = $this->Pemegang_Sertifikat_Model->get_data_where('id_pemegang_sertifikat', $id);
			$data['skema_sertifikasi'] = $this->Skema_Sertifikasi_Model->get_data();
            $this->load->view('admin/template/Header', $data);
            $this->load->view('admin/pemegang_sertifikat/Pemegang_Sertifikat-Edit');
            $this->load->view('admin/template/Footer');
        } else {
            redirect(base_url() . "admin");
        }
    }
    
    public function hapus($id = NULL)
    {
        if ((!$id == NUll) && ($this->Pemegang_Sertifikat_Model->get_data_where("id_pemegang_sertifikat", $id))) {
            $this->Pemegang_Sertifikat_Model->delete_data("id_pemegang_sertifikat", $id);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect(base_url() . "admin");
        }
    }
}
