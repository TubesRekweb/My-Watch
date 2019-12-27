<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row mt-3">
    <div class="col-md-8"></div>
    <div class="col-md-4">
      <form action="" method="post" class="m3">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari data Barang.." name="keyword">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">Cari</button>
          </div>
      </div>
      </form>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-6">
  <?php if( empty($barang)) : ?>
        <div class="alert alert-danger" role="alert" >
          data barang tidak ditemukan.
        </div>
      <?php endif; ?>
    </div>
  </div>

<div class="container-fluid">
	<table class="table table-border">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>SPESIFIKASI</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>WARNA</th>
			<th>STOK</th>
			<th class="text-center">AKSI</th>
			<!-- <th>GAMBAR</th> -->
			
		</tr>
		
		<?php $no= 0;
		foreach ($barang as $brg) :?> 
		
		<tr>
			<td><?= ++$no ?></td>
			<td><?= $brg->nama_produk ?></td>
			<td><?= $brg->spesifikasi_produk ?></td>
			<td><?= $brg->kategori_produk ?></td>
			<td>Rp.<?= number_format($brg->harga_produk, 0,',','.'); ?></td>
			<td><?= $brg->warna_produk ?></td>
			<td><?= $brg->stok ?></td>


			
      <Style>
        .m-p{
          margin-bottom: 5px;
        }
        .m3{
          margin-right: 5px;
        }
      </Style>
			<!-- <td><img src="<?= base_url('assets/img/uploads/') ?><?= $brg->gambar  ?>"></td> -->
			
      <td class="project-actions text-center">
          <a class="btn btn-success btn-sm m-p" href="<?= base_url(); ?>admin/product/detail/<?= $brg->id ?>">  
              <i class="fas fa-folder">
              </i>
              View
          </a>
          <a class="btn btn-info btn-sm m-p" href="<?= base_url(); ?>admin/product/edit/<?= $brg->id ?>">
              <i class="fas fa-pencil-alt">
              </i>
              Edit
          </a>
          <a class="btn btn-danger btn-sm m-p" href="<?= base_url(); ?>admin/product/hapus/<?= $brg->id ?>" onclick="return confirm('yakin akan di hapus ?');">
              <i class="fas fa-trash">
              </i>
              Delete
          </a>
      </td>
		</tr>

		<?php  endforeach; ?>

	</table>
</div>

 


