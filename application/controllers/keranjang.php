	<?php
	
class Keranjang extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('keranjang/index');
        $this->load->view('templates/footer');
   
	}

	 public function man($id)
	{
		$data['man']=$this->Model_man->getManById($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('man/detail',$data);
        $this->load->view('templates/footer');
   
	}

	 public function woman($id)
	{
		$data['woman']=$this->Model_women->getWomenById($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('woman/detail',$data);
        $this->load->view('templates/footer');
   
	}

	 public function couple($id)
	{
		$data['couple']=$this->Model_couple->getCoupleById($id);
        $this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('couple/detail',$data);
        $this->load->view('templates/footer');
   
	}

	public function add_to_cart()
	{
		$barang = $this->model_barang->find($id);
		$data = array(
			'id'      => $barang->id,
			'qty'     => 1,
			'price'   => $barang->harga_produk,
			'name'    => $barang->nama_produk
			
	);
	
	$this->cart->insert($data);
	// redirect ('home');
	}
}