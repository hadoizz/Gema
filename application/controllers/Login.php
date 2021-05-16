<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('user');
	}
    
    public function index(){
        $data['nav'] = $this->load->view('components/nav',NULL, TRUE);
        $data['style'] = $this->load->view('include/ui',NULL,TRUE);
        $this->load->view('pages/login',$data);
    }

    public function auth(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if($this->user->cekUser($email, md5($password))){
            if($this->user->getRole($email) == "0"){
                $_SESSION['role'] = 'admin';
            } else {
                $_SESSION['role'] = 'user';
            }
            redirect(base_url('index.php/base'));
        } else {
            redirect(base_url('index.php/Login?login=false'));
        }
    }

    public function logOut(){
        session_destroy();
        redirect(base_url());
    }
}
?>