<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller{
    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('games');
        $this->load->model('transaction');
	}
    
    public function index(){
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] == 'admin'){
                redirect(base_url("index.php/admin"));
            } else {
                $_SESSION['cart'] = $this->transaction->getCartTotal($_SESSION['email']);
                $this->home();
            }
        }else{
            $this->home();
        }
    }

    public function home(){
        $games['games'] = $this->games->getAllGames();
        if(isset($_SESSION['email'])) $rawCart['items'] = $this->transaction->getCartValue($_SESSION['email']);        
        $cart['cart'] = $this->load->view('components/cartModal',$rawCart, TRUE);
        $data['nav'] = $this->load->view('components/nav',$cart, TRUE);
        $data['style'] = $this->load->view('include/ui',NULL,TRUE);
        $data['showGames'] = $this->load->view('components/showGames',$games, TRUE);
        $this->load->view('pages/home',$data);
    }
    
    public function games(){
        $games['games'] = $this->games->getAllGames();
        if(isset($_SESSION['email'])) $rawCart['items'] = $this->transaction->getCartValue($_SESSION['email']);        
        $cart['cart'] = $this->load->view('components/cartModal',$rawCart, TRUE);
        $data['nav'] = $this->load->view('components/nav',NULL, TRUE);
        $data['footer'] = $this->load->view('components/footer',NULL, TRUE);
        $data['style'] = $this->load->view('include/ui', NULL, TRUE);
        $data['showGames'] = $this->load->view('components/showGames',$games, TRUE);
        $this->load->view('pages/games',$data);
    }

    public function details($id){
        if(isset($_SESSION['email'])) $rawCart['items'] = $this->transaction->getCartValue($_SESSION['email']);        
        $cart['cart'] = $this->load->view('components/cartModal',$rawCart, TRUE);
        $data['nav'] = $this->load->view('components/nav',NULL, TRUE);
        $data['style'] = $this->load->view('include/ui', NULL, TRUE);
        $data['game'] = $this->games->getGame($id);
        $data['kategori'] = $this->games->getKategori($data['game'][0]['Kategori']);
        $data['recommend'] = $this->games->getRandomGames();
        $this->load->view('pages/details',$data);
    }

    public function errorPage(){
        $this->load->view('errors/index.html');
    }
}
?>