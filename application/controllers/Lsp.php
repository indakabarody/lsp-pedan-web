<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lsp extends CI_Controller {

	
	public function index()
	{
		$this->load->view('front/header');
		$this->load->view('front/lsp');
		$this->load->view('front/footer');
	}
}
