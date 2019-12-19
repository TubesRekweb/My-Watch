<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card">
            <div class="card-header">
             Form Ubah Data Barang
          </div>
            <div class="card-body">
<<<<<<< HEAD
              <form action="<?= base_url('admin/dashboard/ubah'); ?>" method="post">
=======
              <form action="<?= base_url('admin/Databarang/ubah/'); ?>" method="post">
>>>>>>> 44fdfc828d2ff3c289c6656779c12edf4a0afb7b
                <input type="hidden" name="id" value="<?= $barang['id']; ?>">

          <div class="form-group">
              <label for="nama_produk">Nama_Produk</label>
              <input type="text" name="nama_produk" class="form-control" id="nama" value="<?= $barang['nama_produk']; ?>">
          </div>

          <div class="form-group">
              <label for="spesifikasi_produk">Spesifikasi_Produk</label>
              <input type="text" name="spesifikasi_produk" class="form-control" id="spesifikasi" value="<?= $barang['spesifikasi_produk']; ?>">
          </div>

           <div class="form-group">
                   <label> Kategori Produk</label> 
                   <select class="form-control" name="kategori_produk" id="kategori" value="<?= $barang['kategori_produk']; ?>">
                    <option>Man</option>
                    <option>Woman</option>
                    <option>Couple</option>
                   </select>
          </div>
          <div class="form-group">
              <label for="harga_produk">Harga_Produk</label>
              <input type="text" name="harga_produk" class="form-control" id="harga" value="<?= $barang['harga_produk']; ?>">
          </div>

           <div class="form-group">
              <label for="warna_produk">Warna_Produk</label>
              <input type="text" name="warna_produk" class="form-control" id="warna" value="<?= $barang['warna_produk']; ?>">
          </div>

           <div class="form-group">
              <label for="stok">Stok</label>
              <input type="text" name="stok" class="form-control" id="stok" value="<?= $barang['stok']; ?>">
          </div>

        
        <a href="<?= base_url('admin/Databarang'); ?>" class ="btn btn-danger">Kembali</a>
        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

        </form>
    </div>

  </div>
</div>