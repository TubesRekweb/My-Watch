  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pl-3">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Add Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="pl-3 pr-3">
       <div class="container">
        <form action="<?= base_url(). 'admin/addproduct/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

		      <div class="form-group">
                   <label> Nama Produk</label> 
				   <input type="text" name="nama_produk" class="form-control">
			  </div>
			  <div class="form-group">
                   <label> Spesifikasi Produk</label> 
				   <input type="text" name="spesifikasi_produk" class="form-control">
			  </div>
			  <div class="form-group">
                   <label> Kategori Produk</label> 
                   <select class="form-control" name="kategori_produk">
                   	<option>Man</option>
                   	<option>Woman</option>
                   	<option>Couple</option>
                   </select>
			  </div>
			  <div class="form-group">
                   <label> Harga Produk</label> 
				   <input type="text" name="harga_produk" class="form-control">
			  </div>
			  <div class="form-group">
                   <label> Warna Produk</label> 
				   <input type="text" name="warna_produk" class="form-control">
			  </div>
			  <div class="form-group">
                   <label> Stok Produk</label> 
				   <input type="text" name="stok" class="form-control">
			  </div>
			  <div class="form-group">
                   <label> Gambar Produk</label> <br>
				   <input type="file" name="gambar" class="form-control">
			  </div>
			  
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
	  </form>
    </div>
  </section>
</div>