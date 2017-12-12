<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_comment extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database();
        }

		public function input($isi)
		{
			$data = array(
				'isi' => $isi,
			);
			

			if (($this->db->insert('comment', $data)) ){
				return TRUE;
				}
		}
		
		public function tampil()
		{  
			return $this->db->get('comment');
		}
	}
?>