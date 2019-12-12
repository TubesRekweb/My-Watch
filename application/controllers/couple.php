<?php
	
    class Couple extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('model_couple');
        }
        public function index()
        {
            $data['couple'] = $this->model_couple->getAllCouple();
            $this->load->view('templates/header');
            $this->load->view('templates/menubar');
            $this->load->view('couple/index', $data);
            $this->load->view('templates/footer');
       
        }
    }