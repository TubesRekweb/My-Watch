<?php
class Databarang extends CI_Controller {

	public function index()
	{
		$data['barang']= $this->model_barang->tampil_data()->result();		
			$this->load->view('templates/admin_header');
			$this->load->view('templates/admin_menubar');
			$this->load->view('admin/databarang', $data);
			$this->load->view('templates/admin_footer');
	}

	public function tambah_aksi()
	{
		$nama_produk =$this->input->post('nama_produk');
		$spesifikasi_produk =$this->input->post('spesifikasi_produk');
	    $kategori_produk =$this->input->post('kategori_produk');
		$harga_produk =$this->input->post('harga_produk');
		$warna_produk =$this->input->post('warna_produk');
		$stok =$this->input->post('stok');
		$gambar =$_FILES['gambar']['name'];
		  if ($gambar = ''){}else{
			// direktori untuk penyimpanan saat uploads
			  $config ['upload_path'] = './assets/img/uploads';
			//   format yang diijinkan 
			  $config ['allowed_types'] = 'jpg|jpeg|png|gif';

			// memanggil library upload
			$this->load->library('upload', $config);
			// apabila gagal
			  if(!$this->upload->do_upload('gambar')){
				 echo "Gambar Gagal di upload !";
	      	  }else {
					$gambar =$this->upload->data('file_name');
				}
			}
			
			$data = array(
				'nama_produk'       => $nama_produk,
				'spesifikasi_produk'=> $spesifikasi_produk,
				'kategori_produk'   => $kategori_produk,
				'harga_produk'      => $harga_produk,
				'warna_produk'      => $warna_produk,
				"stok"              => $stok,
				"gambar"            => $gambar
			);

			// menginput tabel barang
			$this->model_barang->tambah_barang($data, 'tb_barang');
			redirect('admin/databarang');
<<<<<<< HEAD
=======
	}

		public function hapus($id){
		$this->model_barang->hapusDataBarang($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/Databarang');
	}

>>>>>>> 44fdfc828d2ff3c289c6656779c12edf4a0afb7b

	//function ubah
	public function edit($id){
		$data['judul'] = 'Form Ubah Data Barang';
		$data['barang'] = $this->model_barang->getBarangById($id);
			$this->load->view('templates/admin_header',$data);
			$this->load->view('templates/admin_menubar');
			$this->load->view('admin/ubah', $data);
			$this->load->view('templates/admin_footer');
	}

	public function ubah(){
			$this->model_barang->ubahDataBarang();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/Databarang');		
	}
}