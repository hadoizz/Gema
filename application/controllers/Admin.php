<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct(){
		parent::__construct();
        session_start();
        $this->load->library('grocery_CRUD');
        $this->load->model('games');

        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 'admin'){
                // $this->crudItem();
                redirect(base_url('index.php/base/errorPage'));
            }
        }else{
            redirect(base_url('index.php/base/errorPage'));
        }
	}

    public function index(){
        // if(isset($_SESSION['role'])){
            // if($_SESSION['role'] == 'admin'){
                $this->crudItem();
            // }
        // }else{
            // $this->load->view('errors/index.html');
        // }
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

    public function Order() {
        $crud = new grocery_CRUD();
        $crud->set_table('order')
             ->columns('Id_Order', 'Email', 'Status', 'Lama_Sewa')
             ->set_relation('Status', 'status', 'Deskripsi')
             ->unset_add()
             ->unset_delete()
             ->callback_edit_field('Status', array($this, 'edit_status'))
             ->callback_edit_field('Lama_Sewa', array($this, 'edit_lamaSewa'))
             ->callback_edit_field('Email', array($this, 'edit_email'));

        $output = $crud->render();
        $data['crud'] = get_object_vars($output);
        $data['groceryCRUD'] = $this->load->view('include/grocerycrud', $data, TRUE);

        $data['style'] = $this->load->view('include/ui',NULL,TRUE);
        $this->load->view('admin/order', $data);
    }

    function edit_status($value) {
        if($value == 1) {
            return '<select name="Status">
                        <option value="1">Sedang dikirim</option>
                        <option value="2">Sudah dikirim</option>
                    </select>';
        }else if($value == 2){
            return "<input name='Status' readonly value='Sudah dikirim' />";
        }else if($value == 3){
            return '<select name="Status">
                        <option value="3">Siap di pick-up</option>
                        <option value="4">Selesai</option>
                    </select>';
        }else if($value == 4) {
            return '<select name="Status">
                        <option value="4">Selesai</option>
                    </select>';
        }
    }

    function edit_lamaSewa($value) {
        return "<input value='$value' disabled/>";
    }

    function edit_email($value) {
        return "<input value='$value' disabled/>";
    }
}
?>