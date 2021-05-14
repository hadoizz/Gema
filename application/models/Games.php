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

    public function getLastGame(){
        $last_row = $this->db->order_by('Id',"desc")
            ->limit(1)
            ->get('barang')
            ->row()
            ->Id;
        return $last_row;
        // $this->db->query("SELECT * FROM barang")->order_by('barang', 'DESC');
        // $query = $this->db->get('barang')->order_by('Id','desc')->limit(1);
        // var_dump($query);
        // return  $query->result_array();
    }
}
?>