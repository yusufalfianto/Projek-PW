<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class login extends CI_Controller{
     
     public function __construct() {
         parent::__construct();
         
         // Load form helper library
         $this->load->helper('form');
         
         // Load form validation library
         $this->load->library('form_validation');
         
         // Load session library
         $this->load->library('session');
     }
     
  public function index(){
   $this->load->view('home');
  }
  
 
     
     // Check for user login process
  public function login() {
      $this->load->model('m_login');
      $this->form_validation->set_rules('username', 'Username', 'required|trim');
      $this->form_validation->set_rules('password', 'Password', 'required|trim');
   
      if ($this->form_validation->run() == FALSE) {
          if(isset($this->session->userdata['logged_in'])){
             return true;
          }
          else{
            $this->load->view('login');
          }
      }    
      else {
          $data = array(
          'username' => $this->input->post('username'),
          'password' => $this->input->post('password')
          );

          $result = $this->m_login->login($data);
          
          if ($result == TRUE) {
             $username = $this->input->post('username');
             $result = $this->m_login->read_user_information($username);
             if ($result != false) {
                $session_data = array(
                'username' => $result[0]->username
                );
                // Add user data in session
                $this->session->set_userdata('logged_in', $session_data);
                $this->load->view('Home(after login)');
              }
          } 
          
          else {
           $data = array('error_message' => 'Invalid Username or Password');
           $this->load->view('login', $data);
          }
   }
  }
     public function logout(){
         $sess_array = array('username' => '');
         $this->session->unset_userdata('logged_in', $sess_array);
         $this->load->view('login');
     }

}
?>