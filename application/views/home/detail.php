<style>
.detail-wrapper{
	display:flex;
	justify-content: center;
}
.padd{
	margin-bottom: 5px;
}


</style>
<div class="container">
	<div class="row mt-3 detail-wrapper">
		<div class="col-md-6">

			<div class="card">
  				<div class="card-header">Detail Data Barang</div>
  				<div class="card-body">
					  <div class="row">
						  <div class="col-md-4 mb-3">
							<img src="<?= base_url().'assets/img/uploads/'.$barang['gambar'] ?>" alt="#" width="100%">
						  </div>
					  </div>
    			 <h5 class="mb-2 card-title">Nama : <?= $barang['nama_produk']; ?></h5>
    			 <h6 class="mb-2 card-text"><?= $barang['spesifikasi_produk']; ?></h6>
           <!-- <?= number_format($brg->harga_produk, 0,',','.') ?> -->
    			 <p class="card-text padd">Warna : <?= $barang['warna_produk']; ?></p>
		   	<p class="card-text padd">kategori : <?= $barang['kategori_produk']; ?></p>
    			 <p class="card-text padd">Harga : Rp.<?= number_format($barang['harga_produk'], 0,',','.'); ?></p>
				 <p class="card-text padd">Stok : <?= $barang['stok']; ?></p>
<hr>
		   <form method="post" action="<?= base_url('keranjang/tambah_ke_keranjang/') . $barang ['id'] ?>">
				<spam>Jumlah Tambah : </spam><input id="qty" name="qty" type="number">
				<button type="submit">
					Tambah ke keranjang
				</button>
			</form>
    			 <a href="<?= base_url(); ?>home/index/" class="btn btn-primary mt-3">Kembali</a>
 				 </div>
			</div>
		</div>
	</div>
</div>