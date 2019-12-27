<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?=base_url('assets/'); ?>img/baground.jpg">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="hs-left"><img src="<?=base_url('assets/'); ?>img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $19.90</div>
						<h2><span>2018</span> <br>summer collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div>
			<div class="hs-item">
				<div class="hs-left"><img src="<?=base_url('assets/'); ?>img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $19.90</div>
						<h2><span>2018</span> <br>summer collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<form action="" method="post" class="nav-form iniaja"> 
  					<input class="nav-search" type="search" placeholder="Search" aria-label="Search" name="keyword">
					<a href="#" class="search" type="submit"><img src="<?=base_url(); ?>assets/img/icons/search.png" alt="">
					</a>
				</form>
			<div class="row mt-3">
               <div class="col-md-12">
                 <?php if( empty($barang)) : ?>
                  <div class="alert alert-danger text-center" role="alert" >
                    data barang tidak ditemukan.
                  </div>
                <?php endif; ?>
               </div>
            </div>
	<!-- Intro section -->
	<section class="intro-section spad pb-0">
		<div class="section-title">
			<h2>premium products</h2>
			<p>We recommend</p>
		</div>
		<div class="intro-slider">
			<ul class="slidee">

						<?php foreach ($barang as $brg) : ?>
				<li>
					<div class="intro-item">
						<figure>
							<img src="<?= base_url().'assets/img/uploads/'.$brg->gambar ?>" alt="#">
						</figure>
						<div class="product-info">
							<h5><?= $brg->nama_produk ?></h5>
							<p>Rp.<?= number_format($brg->harga_produk, 0,',','.') ?></p>
							<a href="<?= base_url('keranjang/tambah_ke_keranjang/') . $brg->id?>" class="site-btn btn-line">ADD TO CART</a>
							<a href="<?= base_url('detailUser/detail/'); ?><?= $brg->id ?>" class="site-btn btn-line">DETAIL</a>
						</div>
					</div>

				</li>

						  <?php endforeach; ?>
			</ul>
		</div>
		<div class="container">
			<div class="scrollbar">
				<div class="handle">
					<div class="mousearea"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<div class="featured-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="featured-item">
						<img src="<?=base_url('assets/'); ?>img/featured/featured-1.jpg" alt="">
						<a href="#" class="site-btn">see more</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="featured-item mb-0">
						<img src="<?=base_url('assets/'); ?>img/featured/featured-2.jpg" alt="">
						<a href="#" class="site-btn">see more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Featured section end -->

