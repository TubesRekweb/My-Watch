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
			<td><div class="btn btn-sm btn-primary">Detail</div></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
