<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
  				<div class="card-header">Detail Data Barang</div>
  				<div class="card-body">
    			 <h5 class="card-title"><?= $barang['nama_produk']; ?></h5>
    			 <h6 class="card-subtitle mb-2 text-muted"><?= $barang['spesifikasi_produk']; ?></h6>
           <!-- <?= number_format($brg->harga_produk, 0,',','.') ?> -->
    			 <p class="card-text">Rp.<?= number_format($barang['harga_produk'], 0,',','.'); ?></p>
    			 <p class="card-text"><?= $barang['warna_produk']; ?></p>
    			 <p class="card-text"><?= $barang['stok']; ?></p>
           <p class="card-text"><?= $barang['kategori_produk']; ?></p>
    			 <a href="<?= base_url(); ?>home/index/" class="btn btn-primary">Kembali</a>
 				 </div>
			</div>
		</div>
	</div>
</div>