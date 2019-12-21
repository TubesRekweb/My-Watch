<style>
  .auto-center{
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section class="content">
<div class="container">
  <div class="row auto-center">
    <div class="col-md-6">
      <div class="card mt-4">
          <div class="card-header">Detail Data Barang</div>
          <div class="card-body">
           <img src="<?= base_url().'assets/img/uploads/'.$barang['nama_produk'];?>" class="card-img-top" alt="...">
           <h5 class="card-title"><?= $barang['nama_produk']; ?></h5>
           <h6 class="card-subtitle mb-2 text-muted"><?= $barang['spesifikasi_produk']; ?></h6>
           <p class="card-text">Rp.<?= number_format($barang['harga_produk'], 0,',','.'); ?></p>
           <p class="card-text"><?= $barang['warna_produk']; ?></p>
           <p class="card-text"><?= $barang['stok']; ?></p>
           <p class="card-text"><?= $barang['kategori_produk']; ?></p>
           <a href="<?= base_url(); ?>admin/dashboard/" class="btn btn-primary">Kembali</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>