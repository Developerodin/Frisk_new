<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home5 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('home5');
		$this->load->view('footer');
		
	}

}

