<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar_barang extends CI_Controller {

	public function __construct() {
         parent::__construct();
         
         // Load form helper library
         $this->load->helper('form');
         
         // Load form validation library
         $this->load->library('form_validation');
         
         // Load session library
         $this->load->library('session');
     }

	
	public function index()
	{
		$this->load->view('detail_barang');
	}
}
