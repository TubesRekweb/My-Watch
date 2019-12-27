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
		$qty= 1;
		// var_dump($this->input->post('qty'));
		// die;
		if($this->input->post('qty')){
			$qty = $this->input->post('qty');
		}
		$data = array(
			'rowid'   => '',
			'id'      => $barang->id,
			'qty'     => $qty,
			'price'   => $barang->harga_produk,
			'name'    => $barang->nama_produk,
			'gambar'  => $barang->gambar   		
		);
	    foreach ($this->cart->contents() as $item){
			if ($item['id'] == $id){
				$qty += $item['qty'];
			}
		}if ($qty <= $barang->stok) {
			$this->cart->insert($data);
		}
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
		redirect ('keranjang');
    	
     
	}
}