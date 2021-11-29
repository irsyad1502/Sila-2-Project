<?php

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard');
		$this->load->view('template/footer');

	}

	public function menu()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('menu');
		$this->load->view('template/footer');

	}
}

?>