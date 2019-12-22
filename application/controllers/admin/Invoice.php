<?php

class Invoice extends CI_Controller{
	public function index(){
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_menubar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates/admin_footer');
	}

	public function detail($id_invoice){
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_menubar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates/admin_footer');
	}
}
