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

    public function deleteCart($id){
        $this->transaction->deleteOneCart($id, $_SESSION['email']);
        redirect(base_url('?delete=true'));
    }

    public function confirmOrder(){
        $data['items'] = $this->transaction->getCartValue($_SESSION['email']);
        $data['style'] = $this->load->view('include/ui', NULL, TRUE);

        $this->load->view('pages/confirmOrder',$data);
    }

    public function submitOrder() {
        $lastIdOrder = $this->transaction->getLastOrder() + 1;
        $cart['items'] = $this->transaction->getCartValue($_SESSION['email']);
        $day = $this->input->post('day');

        // Insert satu per satu
        
        $this->transaction->insertOrder($lastIdOrder, $_SESSION['email'], $day);
        
        foreach($cart['items'] as $item){
            $this->transaction->insertDetailOrder($lastIdOrder, $item['Id']);
        }

        //Kosongin cart
        $this->transaction->deleteAllCart($_SESSION['email']);
        redirect(base_url('?order=true'));
    }

    public function orderHistory() {

    }
}
?>