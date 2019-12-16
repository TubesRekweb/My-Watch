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

        public function keranjang($id)
	{
		$data['man'] = $this->Model_man->getManById($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('keranjang/index',$data);
        $this->load->view('templates/footer');
   
    }
    
    public function tambah_ke_keranjang($id)
	{
		$barang = $this->Model_man->find($id);
		$data = array(
			'id'      => $barang->id,
			'qty'     => 1,
			'price'   => $barang->harga_produk,
			'name'    => $barang->nama_produk
			
    );
    $this->cart->insert($data);
	redirect ('Man');
    }
    public function detail_keranjang()
    {
        
        $this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('keranjang/index');
        $this->load->view('templates/footer');
    }



    }