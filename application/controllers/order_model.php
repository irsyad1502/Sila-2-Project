<?php
class Order_model extends CI_Model{
  public $kategori;
  public $jam;
  public $jumlah_pesanan;
  public $tipe;
  public $tanggal;
  public $created_at;
  public $updated_at;

  public function getDataOrder()
  {
    $this->load->database();
    $orders = $this->db->get("spa");
    $result = $orders->result();
    return json_encode ($result);
  }
}

