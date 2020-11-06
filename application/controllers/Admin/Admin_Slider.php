<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Slider extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Slider_Model');
        $this->load->model('Login_Model');
        if (!$this->Login_Model->isLogin() || $this->session->role != 'admin') {
            return redirect(base_url() . "login");
        }
	}
	
    public function index()
    {
        $data['judul']   = 'Slider';
        $data['slider']  = $this->Slider_Model->get_data();
        $data['asset2']  = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/slider/Slider');
        $this->load->view('admin/template/Footer');
	}
	
    public function tambah()
    {
        if ($this->input->post('submit')) {
            if (!empty($_FILES['slider']['name'])) {
                $slider['slider'] = $this->_upload('slider', 'slider');
                if ($this->upload->display_errors() != "") {
                    $data['error'] = $this->upload->display_errors();
                } else {
                    $slider['id_slider'] = uniqid();
                    $slider['enabled']   = 1;
                    $this->Slider_Model->add_data($slider);
                    redirect(base_url() . 'admin/slider');
                }
            } else {
                $data['error'] = 'Slider is required';
            }
        }
        $data['judul']   = 'Tambah Slider';
        $data['asset2']  = base_url() . 'asset2/';
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/slider/Slider-Tambah');
        $this->load->view('admin/template/Footer');
	}
	
    public function edit($id = NULL)
    {
        if ((!$id == NUll) && ($this->Slider_Model->get_data_where("id_slider", $id))) {
            if ($this->input->post('submit')) {
                if (!empty($_FILES['slider']['name'])) {
                    $slider_baru['slider'] = $this->_upload('slider', 'slider');
                    if ($this->upload->display_errors() != "") {
                        $data['error'] = $this->upload->display_errors();
                    } else {
                        $slider_lama = $this->Slider_Model->get_data_where_row('id_slider', $id);
                        $this->_deleteImage($slider_lama['slider'], 'slider');
                        $this->Slider_Model->update_data($id, $slider_baru);
                        redirect(base_url() . 'admin/slider');
                    }
                } else {
                    redirect(base_url() . "admin/slider");
                }
            }
            $data['judul']   = 'Edit Slider';
            $data['slider']  = $this->Slider_Model->get_data_where('id_slider', $id);
            $data['asset2']  = base_url() . 'asset2/';
            $this->load->view('admin/template/Header', $data);
            $this->load->view('admin/slider/Slider-Edit');
            $this->load->view('admin/template/Footer');
        } else {
            redirect(base_url() . "admin");
        }
	}
	
    public function enable($id = NULL)
    {
        if ((!$id == NUll) && ($this->Slider_Model->get_data_where("id_slider", $id))) {
            $data['enabled'] = 1;
            $this->Slider_Model->update_data($id, $data);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect(base_url() . "admin");
        }
	}
	
    public function disable($id = NULL)
    {
        if ((!$id == NUll) && ($this->Slider_Model->get_data_where("id_slider", $id))) {
            $data['enabled'] = 0;
            $this->Slider_Model->update_data($id, $data);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect(base_url() . "admin");
        }
	}
	
    public function hapus($id = NULL)
    {
        if ((!$id == NUll) && ($this->Slider_Model->get_data_where("id_slider", $id))) {
            $data = $this->Slider_Model->get_data_where("id_slider", $id);
            foreach ($data as $row) {
                $this->_deleteImage($row['slider'], "slider");
            }
            $this->Slider_Model->delete_data("id_slider", $id);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect(base_url() . "admin");
        }
	}
	
    public function _upload($x, $y)
    {
        $config['upload_path']      = './asset2/upload/' . $y . '/';
        $config['allowed_types']    = 'jpg|jpeg|png';
        $config['encrypt_name']     = true;
        $config['file_ext_tolower'] = true;
        $config['overwrite']        = true;
        $config['max_size']         = 2048;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload($x)) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
	}
	
    public function _deleteImage($id, $y)
    {
        $product = $id;
        if ($product != "default.jpg") {
            $filename = explode(".", $product)[0];
            return array_map('unlink', glob(FCPATH . "asset2/upload/$y/$filename.*"));
        }
    }
}
