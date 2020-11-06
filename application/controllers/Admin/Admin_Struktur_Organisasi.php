<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Struktur_Organisasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Struktur_Organisasi_Model');
        $this->load->model('Login_Model');
        if (!$this->Login_Model->isLogin() || $this->session->role != 'admin') {
            return redirect(base_url() . "login");
        }
	}
	
    public function index()
    {
        $data['judul']   = 'Struktur Organisasi';
        $data['struktur_organisasi']    = $this->Struktur_Organisasi_Model->get_data();
        $data['asset2']  = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/struktur_organisasi/Struktur_Organisasi');
        $this->load->view('admin/template/Footer');
	}
	
    public function tambah()
    {
        if ($this->input->post('submit')) {
            $struktur_organisasi = array(
                'id_struktur_organisasi' => uniqid(),
                'nama' => $this->input->post('nama'),
                'tugas' => $this->input->post('tugas'),
            );
            $this->Struktur_Organisasi_Model->add_data($struktur_organisasi);
            redirect(base_url() . 'admin/struktur-organisasi');
        }
        $data['judul']   = 'Tambah';
        $data['asset2']  = base_url() . 'asset2/';
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/struktur_organisasi/Struktur_Organisasi-Tambah');
        $this->load->view('admin/template/Footer');
	}
	
    public function edit($id = NULL)
    {
        if ((!$id == NUll) && ($this->Struktur_Organisasi_Model->get_data_where("id_struktur_organisasi", $id))) {
            if ($this->input->post('submit')) {
                $struktur_organisasi = array(
                    'nama' => $this->input->post('nama'),
                    'tugas' => $this->input->post('tugas')
                );
                $this->Struktur_Organisasi_Model->update_data($id, $struktur_organisasi);
                redirect(base_url() . 'admin/struktur-organisasi');
            }
            $data['judul']   = 'Edit';
            $data['data']    = $this->Struktur_Organisasi_Model->get_data_where('id_struktur_organisasi', $id);
            $data['asset2']  = base_url() . 'asset2/';
            $this->load->view('admin/template/Header', $data);
            $this->load->view('admin/struktur_organisasi/Struktur_Organisasi-Edit');
            $this->load->view('admin/template/Footer');
        } else {
            redirect(base_url() . "admin");
        }
	}
	
    public function hapus($id = NULL)
    {
        if ((!$id == NUll) && ($this->Struktur_Organisasi_Model->get_data_where("id_struktur_organisasi", $id))) {
            $this->Struktur_Organisasi_Model->delete_data("id_struktur_organisasi", $id);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect(base_url() . "admin");
        }
    }
}
