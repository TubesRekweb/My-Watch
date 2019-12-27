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
				</a>
	<a href="<?= base_url('/auth/logout');  ?>" class="card-user ml-3">
	<div class="fa fa-sign"></div>
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


<script>
	$("button").click(function(){
	$("p:first").addClass("intro");
	});
</script>