<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail Pemesanan No. Invoice: <?= $invoice->id ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Detail Pemesanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	<!-- /.content-header -->
	
<div class="container-fluid">
	
	<table class="table table-bordered table-hover table-stripped">
		<tr>
			<th>ID Barang</th>
			<th>Nama Produk</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>Sub-Total</th>
		</tr>

		<?php 
		$total = 0;
		foreach($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		?>

		<tr>
			<th><?= $psn->id_brg ?></th>
			<th><?= $psn->nama_brg ?></th>
			<th><?= $psn->jumlah ?></th>
			<th>Rp.<?= number_format($psn->harga,0,',','.') ?></th>
			<th>Rp.<?= number_format($subtotal,0,',','.') ?></th>
		</tr>
		<?php endforeach; ?>
		<tr>
			<td colspan="4" align="right">Grand Total</td>
			<td align="right">Rp.<?= number_format($total,0,',','.') ?>,-</td>
		
		</tr>
	</table>
	<a href="<?= base_url('admin/invoice') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>
