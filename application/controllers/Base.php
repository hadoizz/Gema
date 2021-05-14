<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller{
    public function __construct(){
		parent::__construct();
        session_start();
	}
    
    public function index(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] == 'admin'){
                redirect(base_url("index.php/admin"));
            }
        }else{
            $this->home();
        }
    }

    public function home(){
        $data['style'] = $this->load->view('include/ui',NULL,TRUE);
        $this->load->view('pages/home',$data);
    }
    
    public function games(){
        $data['style'] = $this->load->view('include/ui', NULL, TRUE);
        $data['card'] = $this->load->view('components/card',NULL, TRUE);
        $this->load->view('pages/games',$data);
    }
}
?>