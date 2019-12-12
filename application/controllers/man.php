<?php
	
    class Man extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_man');
        }
        public function index()
        {
            $data['man'] = $this->Model_man->getAllMan();
            $this->load->view('templates/header');
            $this->load->view('templates/menubar');
            $this->load->view('man/index', $data);
            $this->load->view('templates/footer');
       
        }



    }