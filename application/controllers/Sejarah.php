<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	
	public function index()
	{
		$this->load->view('front/header');
		$this->load->view('front/sejarah');
		$this->load->view('front/footer');
	}
}
