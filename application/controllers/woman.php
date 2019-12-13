<?php
	
    class Woman extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_women');
        }
        public function index()
        {
            $data['women']=$this->Model_women->getAllWomen();
            $this->load->view('templates/header');
            $this->load->view('templates/menubar');
            $this->load->view('woman/index',$data);
            $this->load->view('templates/footer');
       
        }
        public function keranjang($id)
	{
		$data['women']=$this->Model_women->getWomenById($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('woman/detail',$data);
        $this->load->view('templates/footer');
   
	}
    }