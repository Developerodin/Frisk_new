<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{ 
		// $this->load->model('home');
		
		// $data['all'] = $this->home->alldata();
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('main');
		$this->load->view('footer');
	}

}

