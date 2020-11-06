<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Tempat_Uji_Kompetensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tempat_Uji_Kompetensi_Model');
        $this->load->model('Login_Model');
        if (!$this->Login_Model->isLogin() || $this->session->role != 'admin') {
            return redirect(base_url() . "login");
        }
	}
	
    public function index()
    {
        $data['judul']   = 'Tempat Uji Kompetensi (Gambar)';
        $data['tempat_uji_kompetensi']    = $this->Tempat_Uji_Kompetensi_Model->get_data();
        $data['asset2']  = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/tempat_uji_kompetensi/Tempat_Uji_Kompetensi');
        $this->load->view('admin/template/Footer');
	}
	
    public function tambah()
    {
        if ($this->input->post('submit')) {
            $tempat_uji_kompetensi = array(
                'id_tempat_uji_kompetensi' => uniqid(),
                'gambar' => $this->_upload("gambar", 'tempat_uji_kompetensi'),
                'caption' => $this->input->post('caption'),
			);

            $this->Tempat_Uji_Kompetensi_Model->add_data($tempat_uji_kompetensi);
            redirect(base_url() . 'admin/tempat-uji-kompetensi');
        }
        $data['judul']   = 'Tambah';
        $data['asset2']  = base_url() . 'asset2/';
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/tempat_uji_kompetensi/Tempat_Uji_Kompetensi-Tambah');
        $this->load->view('admin/template/Footer');
	}
	
    public function edit($id = NULL)
    {
        if ((!$id == NUll) && ($this->Tempat_Uji_Kompetensi_Model->get_data_where("id_tempat_uji_kompetensi", $id))) {
            if ($this->input->post('submit')) {
                $tempat_uji_kompetensi = array(
                    'caption' => $this->input->post('caption'),
				);
				
				if (!empty($_FILES["gambar"]["name"])) {
                    $data['gambar'] = $this->_upload("gambar", "tempat_uji_kompetensi");
                    $this->_deleteImage($this->input->post('gambar_lama'), "tempat_uji_kompetensi");
                    $this->_deleteImage("thumb_" . $this->input->post('gambar_lama'), "tempat_uji_kompetensi");
				}
				
                $this->Tempat_Uji_Kompetensi_Model->update_data('id_tempat_uji_kompetensi', $id, $data);
                redirect(base_url() . 'admin/tempat-uji-kompetensi');
            }
            $data['judul']   = 'Edit';
            $data['data']    = $this->Tempat_Uji_Kompetensi_Model->get_data_where('id_tempat_uji_kompetensi', $id);
            $data['asset2']  = base_url() . 'asset2/';
            $this->load->view('admin/template/Header', $data);
            $this->load->view('admin/tempat_uji_kompetensi/Tempat_Uji_Kompetensi-Edit');
            $this->load->view('admin/template/Footer');
        } else {
            redirect(base_url() . "admin");
        }
	}
	
    public function hapus($id = NULL)
    {
        if ((!$id == NUll) && ($this->Tempat_Uji_Kompetensi_Model->get_data_where("id_tempat_uji_kompetensi", $id))) {
			$data = $this->Tempat_Uji_Kompetensi_Model->get_data_where("id_tempat_uji_kompetensi", $id);
            foreach ($data as $row) {
                $this->_deleteImage($row['gambar'], "tempat_uji_kompetensi");
            }
            $this->Tempat_Uji_Kompetensi_Model->delete_data("id_tempat_uji_kompetensi", $id);
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
            $this->_resizeImage($this->upload->data("file_name"), $y);
            $this->_resizeThumbImage($this->upload->data("file_name"), $y);
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }
    
    public function _resizeImage($filename, $y)
    {
        $config = array(
            'image_library' => 'gd2',
            'source_image' => './asset2/upload/' . $y . '/' . $filename,
            'new_image' => './asset2/upload/' . $y . '/' . $filename,
        );
        $this->load->library('image_lib');
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }
    
    public function _resizeThumbImage($filename, $y)
    {
        $config = array(
            'image_library' => 'gd2',
            'source_image' => './asset2/upload/' . $y . '/' . $filename,
            'new_image' => './asset2/upload/' . $y . '/thumb_' . $filename,
            'maintain_ratio' => true,
            'create_thumb' => false,
            'height' => 70
        );
        $this->load->library('image_lib');
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
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
