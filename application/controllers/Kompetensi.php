<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetensi extends CI_Controller {

	
	public function index()
	{
		$this->load->view('front/header');
		$this->load->view('front/kompetensi');
		$this->load->view('front/footer');
	}
}
