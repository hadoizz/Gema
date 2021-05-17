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

	public function insertCart($id, $email){
		$query = $this->db->query("INSERT INTO cart (Id_Barang, Email) VALUES ('$id', '$email')");
	}

    public function cekCart($id, $email){
		$query = $this->db->query("SELECT COUNT(*) FROM cart WHERE Email = '$email' AND ID_Barang = '$id'");
		return ($query->result_array()[0]['COUNT(*)']);
	}

	public function getCartValue($email){
		$query = $this->db->query("SELECT * FROM cart WHERE Email = '$email'");
		return $query->result_array();
	}
}
?>