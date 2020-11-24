<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {

	
	public function index()
	{
		$this->load->view('front/header');
		$this->load->view('front/visi');
		$this->load->view('front/footer');
	}
}
