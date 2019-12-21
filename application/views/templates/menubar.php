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

				 <!-- SEARCH FORM -->
           <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
             <button class="btn btn-navbar" type="submit">
             <i class="fas fa-search"></i>
             </button>
            </div>
            </div>
           </form>
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