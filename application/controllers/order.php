<?php
class Order extends CI_Controller{
    public function index()
    {
        $this->load->model('order_model');
        echo 'Order: '.$this->order_model->getDataOrder();
    }
}


