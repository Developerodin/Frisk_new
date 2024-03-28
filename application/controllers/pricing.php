<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pricing extends CI_Controller {


	public function index()
	{ 
		
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('pricing');
		$this->load->view('footer');
	}

}

