	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="<?= base_url('keranjang/detail_keranjang');  ?>" class="card-bag"><img src="<?=base_url(); ?>assets/img/icons/bag.png" alt="">
					 <?php $keranjang = $this->cart->total_items() ?>
					 <span>
					 	<?php echo ($keranjang)?>
					 </span>
					
				<a href="#" class="search"><img src="<?=base_url(); ?>assets/img/icons/search.png" alt="">
				</a>

			</div>
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="<?= base_url('home/index');  ?>">Home</a></li>
				<li><a href="<?= base_url('kategori/woman');  ?>">Woman</a></li>
				<li><a href="<?= base_url('kategori/man');  ?>">Man</a></li>
				<li><a href="<?= base_url('kategori/couple');  ?>">Couple</a></li>
				<li><a href="<?= base_url('contact/index');  ?>">Contact</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->
