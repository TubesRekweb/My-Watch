<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahbarang" ><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

	<table class="table table-border">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>SPESIFIKASI</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>WARNA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php $no= 0;
		foreach ($barang as $brg) :?> 
		
		<tr>
			<td><?= ++$no ?></td>
			<td><?= $brg->nama_produk ?></td>
			<td><?= $brg->spesifikasi_produk ?></td>
			<td><?= $brg->kategori_produk ?></td>
			<td><?= $brg->harga_produk ?></td>
			<td><?= $brg->warna_produk ?></td>
			<td><?= $brg->stok ?></td>

			<td><a href="<?= base_url(); ?>admin/Databarang/edit/<?= $brg->id ?>"><div class="btn btn-primary btn-sm"><i class="fas fa-edit"></a></i></div></td>

			<td><a href="<?= base_url(); ?>admin/Databarang/hapus/<?= $brg->id ?>" onclick="return confirm('yakin?');"><div class="btn btn-danger btn-sm"><i class="fas fa-trash" ></a></i></div></td>
		</tr>

		<?php  endforeach; ?>

	</table>
</div>

<!-- modal bootsrrap -->
<!-- Modal -->
<div class="modal fade" id="tambahbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(). 'admin/databarang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

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
			  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

	  </form>

    </div>
  </div>
</div>
