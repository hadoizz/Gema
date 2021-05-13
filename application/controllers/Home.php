<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    
    public function index(){
        $data['style'] = $this->load->view('include/ui',NULL,TRUE);
        
        $this->load->view('pages/home',$data);
    }
}
?>