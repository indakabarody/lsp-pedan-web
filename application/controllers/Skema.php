<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skema extends CI_Controller {

	
	public function index()
	{
		$this->load->view('front/header');
		$this->load->view('front/skema');
		$this->load->view('front/footer');
	}
}
