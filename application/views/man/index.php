	<!-- Page Info -->
	<div class="page-info-section page-info-big">
		<div class="container">
			<h2>Man</h2>
			<div class="site-breadcrumb">
				<a href="">Home</a> / 
				<span>Man</span>
			</div>
			<img src="<?=base_url(); ?>assets/img/categorie-page-top.png" alt="" class="cata-top-pic">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area categorie-page spad">
		<div class="container">
			<div class="categorie-filter-warp">
				<p>Showing 12 results</p>
				<div class="cf-right">
					<div class="cf-layouts">
						<a href="#"><img src="<?=base_url(); ?>assets/img/icons/layout-1.png" alt=""></a>
						<a class="active" href="#"><img src="<?=base_url(); ?>assets/img/icons/layout-2.png" alt=""></a>
					</div>
					<form action="#">
						<select>
							<option>Color</option>
						</select>
						<select>
							<option>Brand</option>
						</select>
						<select>
							<option>Sort by</option>
						</select>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<?php foreach ($man as $mn) : ?>
					<div class="product-item">
						<figure>
							<img src="<?=base_url(); ?>assets/img/products/1.jpg" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="<?=base_url(); ?>assets/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="<?=base_url(); ?>assets/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6><?= $mn['nama_produk']; ?></h6>
							<p>$39.90</p>
							<a href="#" class="site-btn btn-line">ADD TO CART</a>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			
				
			</div>
			<div class="site-pagination">
				<span class="active">01.</span>
				<a href="">02.</a>
				<a href="">03.</a>
				<a href="">04.</a>
				<a href="">05.</a>
				<a href="">06</a>
			</div>
		</div>
	</div>
	<!-- Page -->
