<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home3 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('home3');
		$this->load->view('footer');
		
	}

}

