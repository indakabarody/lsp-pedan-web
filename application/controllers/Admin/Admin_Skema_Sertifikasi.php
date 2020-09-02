<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Skema_Sertifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Skema_Sertifikasi_Model');
		$this->load->model('Kompetensi_Model');
        $this->load->model('Login_Model');
        if (!$this->Login_Model->isLogin()) {
            return redirect(base_url() . "admin/login");
        }
    }
    
    public function index()
    {
        $data['judul']              = 'Skema Sertifikasi';
        $data['skema_sertifikasi'] = $this->Skema_Sertifikasi_Model->get_data_with_kompetensi_all();
        $data['asset2']            = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/skema_sertifikasi/Skema_Sertifikasi');
        $this->load->view('admin/template/Footer');
    }
    
    public function tambah()
    {
        $this->form_validation->set_rules('id_kompetensi', 'Kompetensi', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'callback_checkSpace|trim|callback_checkNama');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        
        if ($this->form_validation->run() === true) {
            $data = array(
                'id_skema_sertifikasi' => uniqid(),
                'id_kompetensi' => $this->input->post('id_kompetensi'),
                'nama' => ucwords(reduce_multiples($this->input->post('nama'), " ")),
                'slug' => $this->_slug($this->input->post('nama')),
                'gambar' => $this->_upload("gambar", 'skema_sertifikasi'),
                'deskripsi' => $this->input->post('deskripsi')
            );
            
            if ($data['gambar'] != "default.jpg") {
                $data['thumb'] = "thumb_" . $data['gambar'];
            } else {
                $data['thumb'] = "thumb_default.jpg";
            }
            
            $this->Skema_Sertifikasi_Model->add_data($data);
            redirect(base_url() . "admin/skema-sertifikasi");
        }
        
		$data['judul']   = "Tambah Skema Sertifikasi";
		$data['kompetensi'] = $this->Kompetensi_Model->get_data();
        $data['asset2'] = base_url() . "asset2/";
        $this->load->view('admin/template/Header', $data);
        $this->load->view('admin/skema_sertifikasi/Skema_Sertifikasi-Tambah');
        $this->load->view('admin/template/Footer');
    }
    
    public function edit($id = NULL)
    {
        if ((!$id == NUll) && ($this->Skema_Sertifikasi_Model->get_data_where("id_skema_sertifikasi", $id))) {
            $this->form_validation->set_rules('nama', 'Nama', 'callback_checkSpace|trim|callback_checkNama[' . $id . ']');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
            
            if ($this->form_validation->run() === true) {
                $data = array(
                    'id_kompetensi' => $this->input->post('id_kompetensi'),
                    'nama' => ucwords(reduce_multiples($this->input->post('nama'), " ")),
                    'slug' => $this->_slug($this->input->post('nama')),
                    'deskripsi' => $this->input->post('deskripsi')
                );
                
                if (!empty($_FILES["gambar"]["name"])) {
                    $data['gambar'] = $this->_upload("gambar", "skema_sertifikasi");
                    if ($data['gambar'] != "default.jpg") {
                        $data['thumb'] = "thumb_" . $data['gambar'];
                    } else {
                        $data['thumb'] = "default.jpg";
                    }
                    $this->_deleteImage($this->input->post('gambar_lama'), "skema_sertifikasi");
                    $this->_deleteImage("thumb_" . $this->input->post('gambar_lama'), "skema_sertifikasi");
				}
				
                $this->Skema_Sertifikasi_Model->update_data('id_skema_sertifikasi', $id, $data);
                redirect(base_url() . "admin/skema-sertifikasi");
            }
            
            $data['judul']   = "Edit Skema Sertifikasi";
            $data['asset2'] = base_url() . "asset2/";
			$data['data']   = $this->Skema_Sertifikasi_Model->get_data_where('id_skema_sertifikasi', $id);
			$data['kompetensi'] = $this->Kompetensi_Model->get_data();
            $this->load->view('admin/template/Header', $data);
            $this->load->view('admin/skema_sertifikasi/Skema_Sertifikasi-Edit');
            $this->load->view('admin/template/Footer');
        } else {
            redirect(base_url() . "admin");
        }
    }
    
    public function hapus($id = NULL)
    {
        if ((!$id == NUll) && ($this->Skema_Sertifikasi_Model->get_data_where("id_skema_sertifikasi", $id))) {
            $data = $this->Skema_Sertifikasi_Model->get_data_where("id_skema_sertifikasi", $id);
            foreach ($data as $row) {
                $this->_deleteImage($row['gambar'], "skema_sertifikasi");
                $this->_deleteImage($row['thumb'], "skema_sertifikasi");
            }
            $this->Skema_Sertifikasi_Model->delete_data("id_skema_sertifikasi", $id);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect(base_url() . "admin");
        }
    }
    
    public function checkNama($nama = NULL, $id = NULL)
    {
        if ($nama == NULL) {
            redirect(base_url() . "admin");
        }
        if ($data = $this->Skema_Sertifikasi_Model->get_data_where('slug', $this->_slug($nama))) {
            foreach ($data as $row) {
                if ($row['id_skema_sertifikasi'] == $id) {
                    return true;
                }
                $this->form_validation->set_message('checkNama', "Nama Ini Sudah Terdaftar");
                return false;
            }
        }
        return true;
    }
    
    public function checkSpace($space = NULL)
    {
        if ($space == NULL) {
            redirect(base_url() . "admin");
        }
        if (empty(trim($space))) {
            $this->form_validation->set_message('checkSpace', "Input Anda Kosong");
            return false;
        }
        return true;
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
            'maintain_ratio' => false,
            'create_thumb' => false,
            'width' => 750,
            'height' => 420
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
    
    public function _slug($text)
    {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}
