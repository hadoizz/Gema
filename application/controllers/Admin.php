<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->library('grocery_CRUD');
        $this->load->model('games');
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
             ->columns('Id','Nama_Barang','Harga','Deskripsi','Gambar','Kategori')
             ->fields('Id','Nama_Barang','Harga','Deskripsi','Gambar','Kategori')
             ->set_relation('Kategori', 'kategori', 'deskripsi')
             ->set_field_upload('Gambar', 'assets/uploads/poster')
             ->callback_edit_field('Deskripsi', array($this, 'edit_description'))
             ->callback_edit_field('Id', array($this, 'edit_id'))
             ->callback_add_field('Deskripsi', array($this, 'add_description'))
             ->callback_add_field('Id', array($this, 'add_id'))
             ->callback_column('Gambar', array($this, 'img_size'))
             ->callback_before_insert(array($this, 'path_IdBarang'));
            //  ->set_field_upload()

        $output = $crud->render();
        $data['crud'] = get_object_vars($output);
        $data['groceryCRUD'] = $this->load->view('include/grocerycrud', $data, TRUE);

        $data['style'] = $this->load->view('include/ui',NULL,TRUE);
        $this->load->view('admin/item', $data);
    }

    function edit_description($value, $primary_key){
        return "<textarea name='Deskripsi'> $value </textarea>";
    }

    function edit_id($value){
        return "<input name='Id' readonly value='$value' />";
    }

    function add_id(){
        return "<input name='Id' placeholder='Auto Generated' />";
    }

    function add_description() {
        return "<textarea name='Deskripsi'> </textarea> ";
    }

    function img_size($value){
        $tes = base_url('/assets/uploads/poster/');
        return "<img src='$tes$value' width='100px'> </img>";
    }

    function path_IdBarang($post_array){
        $lastId = $this->games->getLastGame();
        $newId = intval(substr($lastId,2,3)) + 1;
        
        if($newId <10){
            $newId = "GM00".$newId;
        }else if($newId <100){
            $newId = "GM0".$newId;
        }else{
            $newId = "GM".$newId;
        }

        $post_array['Id'] = $newId;
        return $post_array;
    }
}
?>