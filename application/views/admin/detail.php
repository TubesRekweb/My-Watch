   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">

<!--   Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Detail Produk</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Detail Produk</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">

    <div class="card">
      <h5 class="card-header"></h5> 
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <img src="<?= base_url().'assets/img/uploads/'.$barang['gambar'];?>" class="card-img-top">
          </div>
          <div class="col-md-8">
            <table class="table">
               <tr>
                  <td>Nama Produk</td>
                  <td><strong><?= $barang['nama_produk']; ?></strong></td>
               </tr>
               <tr>
                  <td>Spesifikasi</td>
                  <td><strong><?= $barang['spesifikasi_produk']; ?></strong></td>
               </tr>
               <tr>
                  <td>Kategori</td>
                  <td><strong><?= $barang['kategori_produk']; ?></strong></td>
               </tr>
               <tr>
                  <td>Harga</td>
                  <td><strong><?= $barang['harga_produk']; ?></strong></td>
               </tr>
               <tr>
                  <td>Warna</td>
                  <td><strong><?= $barang['warna_produk']; ?></strong></td>
               </tr>
               <tr>
                  <td>Stok</td>
                  <td><strong><?= $barang['stok']; ?></strong></td>
               </tr>
               <tr>
                  <td>Harga</td>
                  <td><strong>Rp.<?= number_format($barang['harga_produk'], 0,',','.'); ?></strong></td>
               </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>