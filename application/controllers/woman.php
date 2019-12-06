<?php
	
    class Woman extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
        }
        public function index()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/menubar');
            $this->load->view('woman/index');
            $this->load->view('templates/footer');
       
        }
    }