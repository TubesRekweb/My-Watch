	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="<?= base_url('home'); ?>">Home</a> / 
				<span>Checkout</span>
			</div>
			<img src="img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area cart-page spad">
		<div class="container">
			<form class="checkout-form" method="post" action="<?= base_url(). 'Checkout/order_process' ?>">
				<div class="row">
					<div class="col-lg-6">
						<h4 class="checkout-title">Billing Address</h4>
						<div class="row">
							<div class="col-md-12">
								<input type="text" placeholder="Full Name *" name="nama" class="form-control">
								<input type="text" placeholder="Full Address *" name="alamat" class="form-control">
								<input type="text" placeholder="Zipcode *" name="zipcode" class="form-control">
								<input type="text" placeholder="Phone Number *" name="phone_number" class="form-control">
								<input type="email" placeholder="Email Address *" name="email" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="order-card">
							<div class="order-details">
								<div class="od-warp">
									<h4 class="checkout-title">Your order</h4>
									<table class="order-table">
										<thead>
											<tr>
												<th>Product</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<?php
			                                    foreach ($this->cart->contents() as $items) : ?>
											<tr>
												<td><?= $items['name'] ?></td>
												<td>Rp.<?= number_format($items['subtotal'], 0,',','.')  ?></td>

											</tr>
										 <?php endforeach; ?>
											<tr>
												<td>SubTotal</td>
												
												<td><?php
				 $grand_total = 0;
				 if ($keranjang = $this->cart->contents()) 
				 {
				 	foreach ($keranjang as $item) 
				 	{
				      $grand_total = $grand_total +$item['subtotal'];
				 	}

				 echo "Rp. " .number_format($grand_total, 0,',','.');
				?></td>
					
											</tr>
				    <?php
					} else
					{
						echo"keranjang masih kosong";
					}
					  ?>

											<tr class="cart-subtotal">
												<td>Shipping</td>
												<td>Free</td>
											</tr>
										</tbody>
										<tfoot>
											<tr class="order-total">
												<th>Total</th>
												<th>Rp. <?= number_format($this->cart->total(), 0,',','.') ?></th>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="payment-method">
									<div class="pm-item">
										<input type="radio" name="pm" id="one" class="form-control">
										<label for="one">Paypal</label>
									</div>
									<div class="pm-item">
										<input type="radio" name="pm" id="two" class="form-control">
										<label for="two">Cash on delievery</label>
									</div>
									<div class="pm-item">
										<input type="radio" name="pm" id="three" class="form-control">
										<label for="three">Credit card</label>
									</div>
									<div class="pm-item">
										<input type="radio" name="pm" id="four" checked class="form-control">
										<label for="four">Direct bank transfer</label>
									</div>
								</div>
							</div>
							<button class="site-btn btn-full">Place Order</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Page -->
    