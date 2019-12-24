 <!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="<?= base_url('home'); ?>">Home</a> / 
				<span>Cart</span>
			</div>
			<img src="<?= base_url('assets/'); ?>img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area cart-page spad">
		<div class="container">
			<div class="cart-table">
				<table>
					<thead>
						<tr>
							<th class="product-th">Product</th>
							<th>Price</th>
							<th>Quantity</th>
							<th class="total-th">Subtotal</th>
						</tr>
					</thead>
					<tbody>
						<?php
			            foreach ($this->cart->contents() as $items) : ?>
						<tr>
							<td class="product-col">
								<img src="">
								<div class="pc-title">
									<h4><?= $items['name'] ?></h4>

								</div>
							</td>
							<td class="price-col"><?= number_format($items['price'], 0,',','.')  ?></td>
							<td class="quy-col">
								<div class="quy-input">
									<span>Qty</span>
									<input type="number" value="<?= $items['qty'] ?>" >
								</div>
							</td>
							<td class="total-col">Rp. <?= number_format($items['subtotal'], 0,',','.')  ?></td>
						</tr>
						<?php endforeach; ?>
						<tr>
			               <td colspan="3"=></td>
				           <td align="right">Rp. <?= number_format($this->cart->total(), 0,',','.') ?> </td>
			            </tr>
					</tbody>
				</table>
			</div>
			<div class="row cart-buttons">
				<div class="col-lg-5 col-md-5">
				<a href="<?= base_url('home'); ?>"><div class="site-btn btn-continue">Continue shooping</a></div>
				</div>
				<div class="col-lg-7 col-md-7 text-lg-right text-left">
				<a href="<?= base_url('keranjang/hapus_keranjang'); ?>"><div class="site-btn btn-continue"><div class="site-btn btn-line btn-update">Clear Cart</a></div>
				</div>
			</div>
		</div>
		<div class="card-warp">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="shipping-info">
							<h4>Shipping method</h4>
							<p>Select the one you want</p>
							<div class="shipping-chooes">
								<div class="sc-item">
									<input type="radio" name="sc" id="one">
									<label for="one">Next day delivery<span>$4.99</span></label>
								</div>
								<div class="sc-item">
									<input type="radio" name="sc" id="two">
									<label for="two">Standard delivery<span>$1.99</span></label>
								</div>
								<div class="sc-item">
									<input type="radio" name="sc" id="three">
									<label for="three">Personal Pickup<span>Free</span></label>
								</div>
							</div>
							<h4>Cupon code</h4>
							<p>Enter your cupone code</p>
							<div class="cupon-input">
								<input type="text">
								<button class="site-btn">Apply</button>
							</div>
						</div>
					</div>
					<div class="offset-lg-2 col-lg-6">
						<div class="cart-total-details">
							<h4>Cart total</h4>
							<p>Final Info</p>
							<ul class="cart-total-card">
								<li>Subtotal<span><?php
				 $grand_total = 0;
				 if ($keranjang = $this->cart->contents()) 
				 {
				 	foreach ($keranjang as $item) 
				 	{
				      $grand_total = $grand_total +$item['subtotal'];
				 	}

				 echo "Rp. " .number_format($grand_total, 0,',','.');
				?></td></span></li>
								<li>Shipping<span>Free</span></li>
								<li class="total">Total<span>Rp. <?= number_format($this->cart->total(), 0,',','.') ?> </td></span></li>
				  <?php
					} else
					{
						echo"keranjang masih kosong";
					}
					  ?>
							</ul>
							<a class="site-btn btn-full" href="<?= base_url('checkout'); ?>">Proceed to checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page end -->

