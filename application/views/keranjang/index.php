<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
				<img src="<?=base_url(); ?>assets/img/logomw.png" alt="logo" >
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>

			<div class="header-right">
				<i class="fas fa-cart-plus">
					<?php $keranjang = $this->cart->total_items() ?>
					<?php echo anchor('keranjang/detail_keranjang', $keranjang)?>
				</i>
					
				<!-- <img src="<//?=base_url(); ?>assets/img/icons/bag.png" alt=""> -->
				
				
				<!-- <a href="" class="search"><img src="</?=base_url(); ?>assets/img/icons/search.png" alt=""></a> -->
			</div>

			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="<?= base_url('home/index');  ?>">Home</a></li>
			</ul>
		</div>
	</header>
</section>

<div class="featured-section spad">
	<div class="mt-3 container ">
		<h5>Keranjang Belanja</h5>

		<table class="table mt-3 table-bordered table-striped tabel-hover">
			<tr >
				<th>No</th>
				<th>Nama</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Subtotal</th>
			
			</tr>
			<?php
			$no = 1;
			foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td><?= $no++ ?></td>
				<td><?= $items['name'] ?></td>
				<td><?= $items['qty'] ?></td>
				<td align="right">Rp. <?= number_format($items['price'], 0,',','.')  ?></td>
				<td align="right">Rp. <?= number_format($items['subtotal'], 0,',','.')  ?></td>
			</tr>
			
			<?php endforeach; ?>
			<tr>
			<td colspan="4"></td>
				<td align="right">Rp. <?= number_format($this->cart->total(), 0,',','.') ?> </td>
			</tr>


		</table>
	</div>
</div>

	
