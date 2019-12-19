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
            $data['women'] = $this->Model_women->getAllWomen();
            $this->load->view('templates/header');
            $this->load->view('templates/menubar');
            $this->load->view('woman/index',$data);
            $this->load->view('templates/footer');
       
        }
        public function keranjang($id)
	{
		$data['women'] = $this->Model_women->getWomenById($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('woman/detail',$data);
        $this->load->view('templates/footer');
   
    }
    
    public function tambah_ke_keranjang($id)
	{
		$barang = $this->Model_women->find($id);
		$data = array(
			'id'      => $barang->id,
			'qty'     => 1,
			'price'   => $barang->harga_produk,
			'name'    => $barang->nama_produk
			
    );
    $this->cart->insert($data);
	redirect ('Woman');
    }
    public function detail_keranjang()
    {
        
        $this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('keranjang/detail');
        $this->load->view('templates/footer');
    }
}