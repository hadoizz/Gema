<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->library('grocery_CRUD');
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
        $crud = new grocery_CRUD();
        $crud->set_table('barang')
             ->columns('Nama_Barang','Harga','Deskripsi','Gambar','Kategori')
             ->fields('Nama_Barang','Harga','Deskripsi','Gambar','Kategori');
            //  ->set_field_upload()

        $output = $crud->render();
        $data['crud'] = get_object_vars($output);
        $data['groceryCRUD'] = $this->load->view('include/grocerycrud', $data, TRUE);

        $data['style'] = $this->load->view('include/ui',NULL,TRUE);
        $this->load->view('admin/item', $data);
    }
}
?>