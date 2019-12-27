<?php
	
class Checkout extends CI_Controller
{
	public function construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		if ($this->session->userdata('role_id') == 1) {
			$this->load->view('templates/header');
			$this->load->view('templates/menubar');
			$this->load->view('checkout/index');
			$this->load->view('templates/footer');
		} else {
			redirect('Auth');
		}
   
	}

	public function order_process()
	{
		
		$is_processed = $this->model_invoice->index();
			if( $is_processed ){
				$this->cart->destroy();
				$this->load->view('templates/header');
				$this->load->view('checkout/order_process');
			}else{
				echo "Maaf, Pesanan anda gagal diproses!!";
			}

		
	}
}
