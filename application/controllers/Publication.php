<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publication extends CI_Controller {


	public function index()
	{ 
		
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('Publication');
		$this->load->view('footer');
	}

}