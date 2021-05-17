<?php
defined('BASEPATH') OR exit('No direct script access allowed !');

class Transaction extends CI_Model{
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function getCartTotal($email){
		$query = $this->db->query("SELECT COUNT(*) FROM cart WHERE Email = '$email'");
		return ($query->result_array()[0]['COUNT(*)']);
	}

	public function addToCart($email, $id){
		
	}
    
}
?>