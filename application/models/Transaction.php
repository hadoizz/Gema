<?php
defined('BASEPATH') OR exit('No direct script access allowed !');

class Transaction extends CI_Model{
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function getCartTotal($email){
		$query = $this->db->query("SELECT COUNT(*) FROM cart WHERE Email = '$email'");
		return ($query->result_array()[0]['COUNT(*)']);
	}

	public function insertCart($id, $email){
		$query = $this->db->query("INSERT INTO cart (Id_Barang, Email) VALUES ('$id', '$email')");
	}

    public function cekCart($id, $email){
		$query = $this->db->query("SELECT COUNT(*) FROM cart WHERE Email = '$email' AND ID_Barang = '$id'");
		return ($query->result_array()[0]['COUNT(*)']);
	}

	public function getCartValue($email){
		$query = $this->db->query("SELECT Id, Nama_Barang, Harga, Gambar FROM barang WHERE Id in (SELECT Id_Barang FROM cart WHERE Email = '$email')");
		return $query->result_array();
	}

	public function deleteOneCart($id, $email){
		$query = $this->db->query("DELETE FROM cart WHERE Id_Barang = '$id' AND Email = '$email'");
	}

	public function deleteAllCart($email){
		$query = $this->db->query("DELETE FROM cart WHERE Email = '$email'");
	}

	public function getLastOrder(){
        $last_row = $this->db->order_by('Id_Order',"desc")->limit(1)->get('order')->row()->Id_Order;
        return $last_row;
    }

	public function insertOrder($idOrder, $email, $day){
		$query = $this->db->query("INSERT INTO `order` (Id_Order, Email, Status, Lama_Sewa) VALUES ('$idOrder', '$email', '1', $day)");
	}

	public function insertDetailOrder($idOrder, $idBarang) {
		$query = $this->db->query("INSERT INTO `detail_order` (Id_Order, Id_Barang) VALUES ('$idOrder', '$idBarang')");
	}

	public function getOrder($email){
		$query = $this->db->query("SELECT * FROM `order` WHERE email = '$email'");
		return $query->result_array();
	}

	public function getDetailOrder($email){
		$query = $this->db->query("SELECT o.Id_Order AS Id_Order,
		o.Email AS Email, 
		d.Id_Barang AS Id_Barang, 
		b.Nama_Barang AS Nama_Barang,
		b.Harga AS Harga,
		b.Gambar AS Gambar
		FROM `order` AS o, detail_order AS d, barang AS b
		WHERE o.Id_Order = d.Id_Order AND b.Id = d.Id_Barang AND o.Email = '$email'");
		return $query->result_array();
	}

	public function changeOrderStatus($id, $email){
		$query = $this->db->query("UPDATE `order` set `Status` = '3' WHERE Email = '$email' AND Id_Order = '$id'");
	}

	public function minusStock($id) {
		$this->db->set('Stock', 'Stock-1', FALSE);
		$this->db->where('Id', $id);
		$this->db->update('barang');
	}

	public function plusStock($id) {
		$this->db->set('Stock', 'Stock+1', FALSE);
		$this->db->where('Id', $id);
		$this->db->update('barang');
	}

	public function getSpesificDetailOrder($id) {
		$query = $this->db->query("SELECT * FROM `detail_order` WHERE `Id_Order` = '$id'");
		return $query->result_array();
	}
}
?>