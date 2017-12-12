<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class signup extends CI_Controller{
		
		public function __construct(){
		parent::__construct();
		$this->load->model('model_user');
	}
	public function index()
	{
		$this->load->view('form_input');
	}
   
    
    public function input_data()
	{
		$username=$this->input->post('username');
        $password=$this->input->post('password');
       // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
		$alamat=$this->input->post('alamat');
		$nama_lengkap=$this->input->post('nama_lengkap');
		$nomor_telepon=$this->input->post('nomor_telepon');
		$email=$this->input->post('email');


        if($this->model_user->input($username,$password,$alamat,$nama_lengkap,$nomor_telepon,$email))
        {
           $data['customer'] = $this->model_user->tampil();
           $this->load->view('login');
        }
        else
        {
            $this->load->view('form_input');
        }      
	}
/*
	public function edit_data(){
		$nip = $this->uri->segment(3);
		$data['biodata'] = $this->model_user->pilih($nip);
		$this->load->view('edit_data', $data);
	}
	
	public function update_data(){
		$nip = $this->input->post('nip');
        $nama=$this->input->post('nama');
		$jk=$this->input->post('jk');
		$alamat=$this->input->post('alamat');
		$tempat_lhr=$this->input->post('tempat_lahir');
		$tgl_lhr=$this->input->post('tgl_lahir');
		$email=$this->input->post('email');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		if($this->model_user->update($nip,$nama,$jk,$alamat,$tempat_lhr,$tgl_lhr,$email,$username,$password)){
			$data['biodata']=$this->model_user->tampil();
			$this->load->view('tampil_data', $data);
		}
		else{
			$this->load->view('form_input');
		}
	}
	
	public function delete_data(){
		$nip = $this->uri->segment(3);
		if($this->model_user->hapus($nip)){
			$data['biodata'] = $this->model_user->tampil();
			$this->load->view('tampil_data', $data);
		}
		else{
			$this->load->view('form_input');
		}
	}
	
	public function tampil_data(){
		$data['biodata']=$this->model_user->tampil();
		$this->load->view('tampil_data', $data);
	}*/
		
	}
?>