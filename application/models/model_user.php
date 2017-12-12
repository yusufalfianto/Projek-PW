<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database();
        }

		public function input($username,$password,$alamat,$nama_lengkap,$nomor_telepon,$email)
		{
			$data = array(
				'username' => $username,
				'password' => $password,
				'alamat' => $alamat,
				'nama_lengkap' => $nama_lengkap,
				'nomor_telepon' => $nomor_telepon,
				'email' => $email
			);
			

			if (($this->db->insert('customer', $data)) ){
				return TRUE;
				}
		}
		
		public function tampil()
		{  
			return $this->db->get('customer');
		}
		/*
		public function pilih($username){
			$this->db->where('username', $username);
			return $this->db->get('biodata');
		}
	  
	  public function update($nip,$nama,$jk,$alamat,$tempat_lhr,$tgl_lhr,$email,$username,$password){
		  $data = array(
				'nip' => $nip,
				'nama' => $nama,
				'jk' => $jk,
				'alamat' => $alamat,
				'tempat_lahir' => $tempat_lhr,
				'tgl_lahir' => $tgl_lhr,
				'email' => $email
			);
		  $this->db->where('nip', $nip);
		  $this->db->update('biodata', array('nip' => $nip, 'nama' => $nama, 'jk' => $jk, 'alamat' => $alamat, 'tempat_lahir' => $tempat_lhr, 'tgl_lahir' => $tgl_lhr, 'email' => $email));
		  if($this->db->update('biodata', array('nip' => $nip, 'nama' => $nama, 'jk' => $jk, 'alamat' => $alamat, 'tempat_lahir' => $tempat_lhr, 'tgl_lahir' => $tgl_lhr, 'email' => $email))){
			  return TRUE;
		  }
	  }
	  
	  public function hapus($nip){
		  $this->db->where('nip', $nip);
		  if($this->db->delete('biodata')){
			  redirect('Pegawai/tampil_data', 'refresh');
		  }
	  }*/
}