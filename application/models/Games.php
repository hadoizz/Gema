<?php
defined('BASEPATH') OR exit('No direct script access allowed !');

class Games extends CI_Model{
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function getAllGames(){
        $query = $this->db->query("SELECT * FROM barang");
        return $query->result_array(); 
    }

    public function getLastGame(){
        $last_row = $this->db->order_by('Id',"desc")->limit(1)->get('barang')->row()->Id;
        return $last_row;
    }

    public function getGame($id){
        $query = $this->db->query("SELECT * FROM barang WHERE Id = '$id'");
        return $query->result_array();
    }

    public function getKategori($id){
        $query = $this->db->query("SELECT * FROM kategori WHERE Id = '$id'");
        return $query->result_array();
    }

    public function getRandomGames(){
        $query = $this->db->query("SELECT * FROM barang ORDER BY RAND() LIMIT 3");
        return $query->result_array();
    }

    public function getGameCategory($id){
        $query = $this->db->query("SELECT * FROM barang WHERE Kategori = '$id'");
        return $query->result_array();
    }
}
?>