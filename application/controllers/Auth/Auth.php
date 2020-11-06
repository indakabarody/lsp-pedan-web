<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
    }
    
    public function login()
    {
        if ($this->Login_Model->isLogin()) {
			if ($this->session->role == 'admin') {
				redirect(base_url() . 'admin');
			} elseif ($this->session->role == 'asesor') {
				redirect(base_url() . 'asesor');
			} elseif ($this->session->role == 'peserta') {
				redirect(base_url() . 'peserta');
			}
        }
        $data['asset']  = base_url() . 'asset/';
        $data['asset2'] = base_url() . 'asset2/';
		if ($this->input->post('role') == 'admin') {
			$user = $this->Login_Model->get_data_admin_where('username', $this->input->post('username'));
			if ($user == true) {
				foreach ($user as $row) {
					if (($this->input->post('username') == $row['username']) && (md5($this->input->post('password')) == $row['password'])) {
						$_SESSION['init']  = $user['id'];
						$_SESSION['role'] = 'admin';
						$_SESSION['login'] = true;
						redirect(base_url() . 'admin');
					} else {
						$this->load->view('auth/Login', $data);
					}
				}
			} else {
				$this->load->view('auth/Login', $data);
			}
		} elseif ($this->input->post('role') == 'asesor') {
			$user = $this->Login_Model->get_data_asesor_where('username', $this->input->post('username'));
			if ($user == true) {
				foreach ($user as $row) {
					if (($this->input->post('username') == $row['username']) && (md5($this->input->post('password')) == $row['password'])) {
						$_SESSION['init']  = $user['id'];
						$_SESSION['role'] = 'asesor';
						$_SESSION['login'] = true;
						redirect(base_url() . 'asesor');
					} else {
						$this->load->view('auth/Login', $data);
					}
				}
			} else {
				$this->load->view('auth/Login', $data);
			}
		} elseif ($this->input->post('role') == 'peserta') {
			$user = $this->Login_Model->get_data_peserta_where('username', $this->input->post('username'));
			if ($user == true) {
				foreach ($user as $row) {
					if (($this->input->post('username') == $row['username']) && (md5($this->input->post('password')) == $row['password'])) {
						$_SESSION['init']  = $user['id'];
						$_SESSION['role'] = 'peserta';
						$_SESSION['login'] = true;
						redirect(base_url() . 'peserta');
					} else {
						$this->load->view('auth/Login', $data);
					}
				}
			} else {
				$this->load->view('auth/Login', $data);
			}
		} else {
			$this->load->view('auth/Login', $data);
		}
    }
    
    public function logout()
    {
        unset($_SESSION['init'], $_SESSION['login']);
        redirect(base_url() . 'login');
    }
}
