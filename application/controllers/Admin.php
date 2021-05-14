<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct(){
		parent::__construct();
        session_start();
	}
    
    public function index(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] == 'admin'){
                $this->crudItem();
            }
        }else{
            $this->load->view('errors/index.html');
        }
    }

    public function crudItem(){
        $this->load->view('admin/item');
    }
}
?>