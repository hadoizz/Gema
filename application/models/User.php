<?php
defined('BASEPATH') OR exit('No direct script access allowed !');

class User extends CI_Model{
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function cekUser($email, $password){
        $query = $this->db->get_where('user', array('Email' => $email, 'Password' => $password));
        return $query->result_array();
    }

    public function getRole($email){
        $role = $this->db->get_where('user', array('Email' => $email))->row()->Role;
        return $role;
    }
}
?>