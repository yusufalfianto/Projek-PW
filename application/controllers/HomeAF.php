<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAF extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Home(after login)');
	}
}
