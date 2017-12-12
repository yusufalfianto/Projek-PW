<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class comment extends CI_Controller{
		
		public function __construct(){
		parent::__construct();
		$this->load->model('m_comment');
		}
		public function index()
		{
			$this->load->view('comment');
		}
	   
	    
	    public function input_data()
		{
			$isi=$this->input->post('isi');
	        
	                          
	        if($this->m_comment->input($isi))
	        {
	           $data['comment'] = $this->m_comment->tampil();
	           $this->load->view('Home(after login)');
	        }
	        else
	        {
	            $this->load->view('comment');
	        }      
		}
}
?>
