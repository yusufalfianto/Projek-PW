<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('login_view');
	}
	/*public function index()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('psw');

		if (empty($username) && empty($password)) {
			$this->load->view('Login');
			return;	
		}

		$this->load->model('m_user');
		$row = $this->m_user->login($username, $password);
		if (isset($row)) {
			$data['user'] = $row;
			$this->load->view('Login', $data);
			// set session
			// redirect ke page ....
		} else {
			$data['is_error'] = 'Invalid username or password';
			$this->load->view('Login', $data);
		}
	}
*/
}
