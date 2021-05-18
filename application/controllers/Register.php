<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('user');
        $this->load->model('transaction');
        if(isset($_SESSION['role'])) redirect(base_url());
	}
    
    public function index(){
        $data['nav'] = $this->load->view('components/nav',NULL, TRUE);
        $data['style'] = $this->load->view('include/ui',NULL,TRUE);
        $this->load->view('pages/register',$data);
    }

    public function auth(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('notelp');

        $this->user->register($email, md5($password), $nama, $alamat, $notelp);
        redirect(base_url('index.php/Login?register=success'));
    }
}
?>