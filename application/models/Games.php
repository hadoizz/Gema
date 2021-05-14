<?php
defined('BASEPATH') OR exit('No direct script access allowed !');

class Games extends CI_Model{
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function getGames(){
        $query = $this->db->query("SELECT * FROM barang");
        return $query->result_array(); 
    }
}
?>