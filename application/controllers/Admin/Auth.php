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
            redirect(base_url() . 'admin');
        }
        $data['asset']  = base_url() . 'asset/';
        $data['asset2'] = base_url() . 'asset2/';
        $this->form_validation->set_rules('username', 'Username', 'callback_checkUsername');
        $this->form_validation->set_rules('password', 'Password', 'callback_checkPassword');
        if ($this->form_validation->run() === false) {
            $this->load->view('admin/Login', $data);
        } else {
            $user = $this->Login_Model->get_data_where('username', $this->input->post('username'));
            if ($user == true) {
                foreach ($user as $row) {
                    if (($this->input->post('username') == $row['username']) && (md5($this->input->post('password')) == $row['password'])) {
                        $_SESSION['init']  = $user['id'];
                        $_SESSION['login'] = true;
                        redirect(base_url() . 'admin');
                    } else {
                        $this->load->view('admin/Login', $data);
                    }
                }
            } else {
                $this->load->view('admin/Login', $data);
            } 
        }
    }
    
    public function logout()
    {
        unset($_SESSION['init'], $_SESSION['login']);
        redirect(base_url() . 'login');
    }
    
    public function checkUsername($username)
    {
        if ($this->Login_Model->get_data_num_rows('username', $username) == 0) {
            $this->form_validation->set_message('checkUsername', 'Username tidak tersedia!');
            return false;
        } else
            return true;
    }
    
    public function checkPassword($password)
    {
        $user = $this->Login_Model->get_data_where_row('username', $this->input->post('username'));
        if (isset($user) && !(md5($password) == $user['password'])) {
            $this->form_validation->set_message('checkPassword', 'Password salah!');
            return false;
        } else
            return true;
    }
}
