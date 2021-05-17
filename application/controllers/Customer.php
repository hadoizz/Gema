<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller{
    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('transaction');

        if(!isset($_SESSION['role'])){
            redirect(base_url('index.php/login'));
        }else{
            if($_SESSION['role'] == 'admin'){
                redirect(base_url('index.php/admin'));
            }
        }
	}

    public function addToCart($id){
        if($this->transaction->cekCart($id, $_SESSION['email']) == 0){
            $this->transaction->insertCart($id, $_SESSION['email']);
            redirect(base_url('?success=true'));
        }else{
            redirect(base_url('?success=false'));
        }
    }

}
?>