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

	public function tambah_ke_keranjang($id)
	{
		$barang = $this->model_barang->find($id);
		$data = array(
			'id'      => $barang->id,
			'qty'     => 1,
			'price'   => $barang->harga_produk,
			'name'    => $barang->nama_produk
			
	);
	
	$this->cart->insert($data);
	redirect ('home');
	}

	 public function detail_keranjang()
    {
    	$this->load->view('templates/header');
    	$this->load->view('templates/menubar');
        $this->load->view('keranjang/index');
        $this->load->view('templates/footer');
     
	}
	
	public function hapus_keranjang()
    {
		$this->cart->destroy();
		redirect ('home');
    	
     
    }
}