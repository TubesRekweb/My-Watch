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

<!-- 
			<div class="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li>
						</?php $keranjang = 'Keranjang Belanja: '.$this->cart->total_items(). 'items' ?>
					
						</?php echo anchor('keranjang/detail_keranjang', $keranjang)?>
						
					</li>
				</ul>
			</div> -->







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
				<li><a href="<?= base_url('woman/index');  ?>">Woman</a></li>
				<li><a href="<?= base_url('man/index');  ?>">Man</a></li>
				<li><a href="<?= base_url('couple/index');  ?>">Couple</a></li>
				<li><a href="<?= base_url('contact/index');  ?>">Contact</a></li>
			</ul>
		</div>
	</header>