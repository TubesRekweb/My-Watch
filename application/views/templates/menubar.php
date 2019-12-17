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
				<a href="<?= base_url('keranjang/index');  ?>" class="card-bag"><img src="<?=base_url(); ?>assets/img/icons/bag.png" alt=""><span>2</span></a>

				<a href="<?= base_url('Auth');  ?>" class="card-bag"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>

				<a href="#" class="search"><img src="<?=base_url(); ?>assets/img/icons/search.png" alt=""></a>
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