<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home7 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('home7');
		$this->load->view('footer');
		
	}

}
