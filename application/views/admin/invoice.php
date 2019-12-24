<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Woman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Woman</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	<!-- /.content-header -->
	
<div class="container-fluid">
	<h4>Invoice Pemesanan</h4>

	<table class="table table-boarded table-hover table-stripped">
		<tr>
			<th>ID Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($invoice as $inv) : ?>
		<tr>
			<td><?= $inv->id ?></td>
			<td><?= $inv->nama ?></td>
			<td><?= $inv->alamat ?></td>
			<td><?= $inv->tgl_pesan ?></td>
			<td><?= $inv->batas_bayar ?></td>
			<td><?= anchor('admin/invoice/detail' .$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

		</tr>
		<?php endforeach; ?>
	</table>
</div>
