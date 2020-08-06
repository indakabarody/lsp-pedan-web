<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Unit_Kompetensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Unit_Kompetensi_Model');
		$this->load->model('Skema_Sertifikasi_Model');
        $this->load->model('Login_Model');
        if (!$this->Login_Model->isLogin()) {
            return redirect(base_url() . "admin/login");
        }
    }
    
    public function tampil($id_skema_sertifikasi = NULL)
    {
        $data['judul']              = 'Unit Kompetensi';
		$data['unit_kompetensi'] = $this->Unit_Kompetensi_Model->get_data_where('id_skema_sertifikasi', $id_skema_sertifikasi);
		$data['id_skema_sertifikasi'] = $id_skema_sertifikasi;
        $data['asset2']            = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/unit_kompetensi/Unit_Kompetensi');
        $this->load->view('admin/template/Footer');
	}
	
	public function tambah($id_skema_sertifikasi = NULL)
    {
        $this->form_validation->set_rules('id_skema_sertifikasi', 'Skema Sertifikasi', 'required');
        $this->form_validation->set_rules('kode_unit', 'Kode Unit', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        
        if ($this->form_validation->run() === true) {
            $data = array(
                'id_unit_kompetensi' => uniqid(),
				'id_skema_sertifikasi' => $this->input->post('id_skema_sertifikasi'),
				'kode_unit' => $this->input->post('kode_unit'),
				'judul' => $this->input->post('judul'),
            );
            
            $this->Unit_Kompetensi_Model->add_data($data);
            redirect(base_url() . "admin/unit-kompetensi/$id_skema_sertifikasi");
        }
        
		$data['judul']   = "Tambah Unit Kompetensi";
		$data['asset2'] = base_url() . "asset2/";
		$data['id_skema_sertifikasi'] = $id_skema_sertifikasi;
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/unit_kompetensi/Unit_Kompetensi-Tambah');
        $this->load->view('admin/template/Footer');
	}
	
    public function edit($id_skema_sertifikasi = NULL, $id = NULL)
    {
        if ((!$id == NUll) && ($this->Unit_Kompetensi_Model->get_data_where("id_unit_kompetensi", $id))) {
			$this->form_validation->set_rules('kode_unit', 'Kode Unit', 'required');
			$this->form_validation->set_rules('judul', 'Judul', 'required');
            
            if ($this->form_validation->run() === true) {
                $data = array(
					'kode_unit' => $this->input->post('kode_unit'),
					'judul' => $this->input->post('judul'),
				);
				
                $this->Unit_Kompetensi_Model->update_data($id, $data);
                redirect(base_url() . "admin/unit-kompetensi/$id_skema_sertifikasi");
            }
            
            $data['judul']   = "Edit Unit Kompetensi";
            $data['asset2'] = base_url() . "asset2/";
			$data['data']   = $this->Unit_Kompetensi_Model->get_data_where('id_unit_kompetensi', $id);
            $this->load->view('admin/template/Header', $data);
            $this->load->view('admin/unit_kompetensi/Unit_Kompetensi-Edit');
            $this->load->view('admin/template/Footer');
        } else {
            redirect(base_url() . "admin");
        }
	}
	
	public function hapus($id = NULL)
    {
        if ((!$id == NUll) && ($this->Unit_Kompetensi_Model->get_data_where("id_unit_kompetensi", $id))) {
            $this->Unit_Kompetensi_Model->delete_data("id_unit_kompetensi", $id);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect(base_url() . "admin");
        }
    }
}
