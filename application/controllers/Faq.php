<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {


	public function index()
	{ 
		
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('Faq');
		$this->load->view('footer');
	}

}

