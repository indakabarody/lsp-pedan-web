<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	
	public function index()
	{
	
	}

	public function tkj(){
		$this->load->view('front/header');
		$this->load->view('front/jurusan/tkj');
		$this->load->view('front/footer');
	}


	public function akl(){
		$this->load->view('front/header');
		$this->load->view('front/jurusan/akl');
		$this->load->view('front/footer');
	}

		public function rpl(){
		$this->load->view('front/header');
		$this->load->view('front/jurusan/rpl');
		$this->load->view('front/footer');
	}

	public function bdp(){
		$this->load->view('front/header');
		$this->load->view('front/jurusan/bdp');
		$this->load->view('front/footer');
	}

		public function otp(){
		$this->load->view('front/header');
		$this->load->view('front/jurusan/otp');
		$this->load->view('front/footer');
	}



}
