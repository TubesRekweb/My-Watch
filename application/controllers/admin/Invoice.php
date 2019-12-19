<?php

class Invoice extends CI_Controller{
	public function index(){
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_menubar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates/admin_footer');
	}
}
