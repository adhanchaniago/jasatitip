<!--
BREADCRUMBS
=============================================== -->
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<ol class="breadcrumb bg-blue">
				<li><a href="#">Halaman Utama</a></li>
				<li><a href="#">Kategori</a></li>
				<li class="active"><?= $brg['nama_barang'] ?></li>
			</ol>

		</div>
	</div>
</div>
<!-- END: BREADCRUMBS -->

<div class="container-fluid ">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-9">

					<!--
					MAIN INFO
					=============================================== -->
					<div class="row shop-item-page">

						<!-- ITEM GALLERY BLOCK -->
						<div class="col-sm-4 col-md-5 fix-height">
							<div class="item-gallery float-block">

								<div class="owl-carousel image">

									<div class="item">
										<img src="images/shop/item-page/img-01.jpg" alt="">
									</div>

									<div class="item">
										<img src="images/shop/item-page/img-02.jpg" alt="">
									</div>

									<div class="item">
										<img src="images/shop/item-page/img-03.jpg" alt="">
									</div>

									<div class="item">
										<img src="images/shop/item-page/img-04.jpg" alt="">
									</div>

									<div class="item">
										<img src="images/shop/item-page/img-05.jpg" alt="">
									</div>

									<div class="item">
										<img src="images/shop/item-page/img-06.jpg" alt="">
									</div>
								</div>

								<div class="owl-carousel image-nav hidden-xs">
									<div class="item">
										<img src="images/shop/item-page/img-01.jpg" alt="">
									</div>

									<div class="item">
										<img src="images/shop/item-page/img-02.jpg" alt="">
									</div>

									<div class="item">
										<img src="images/shop/item-page/img-03.jpg" alt="">
									</div>

									<div class="item">
										<img src="images/shop/item-page/img-04.jpg" alt="">
									</div>

									<div class="item">
										<img src="images/shop/item-page/img-05.jpg" alt="">
									</div>

									<div class="item">
										<img src="images/shop/item-page/img-06.jpg" alt="">
									</div>
								</div>

							</div>
						</div><!-- / ITEM GALLERY BLOCK -->

						<!-- CAPTION BLOCK -->
						<div class="col-sm-8 col-md-7 get-height">
							<!-- Item header -->
							<div class="row item-header">
								<div class="col-md-7">
									<h1 class="comp-header st-12 text-uppercase text-blue"><?= $brg['nama_barang'] ?></h1>
								</div>
							</div>

							<!-- Divider -->
							<div class="divider-dotted"></div>

							<!-- Price & rating panel -->
							<div class="row price-pan">

								<!-- Price & rating -->
								<div class="col-md-12">

									<span class="head">Harga</span>

									<span class="price">
										<!-- Price -->
										<span class="price">

											<!-- Currency -->
											<span class="curr">Rp.</span>
											<?= $brg['harga'] ?>
										</span>
									</span>
								</div>
							</div>

							<!-- Divider -->
							<div class="divider-dotted"></div>

							<form class="" action="index.html" method="post">
								<!-- Product customization panel -->
								<div class="row set-panel">
									<div class="col-md-8">
										<div class="btn-group btn-group-toggle size-panel" data-toggle="buttons">
											<label class="btn btn-secondary active">
												<input type="radio" name="options" id="option1" checked> 5Kg
											</label>
											<label class="btn btn-secondary">
												<input type="radio" name="options" id="option2"> 10Kg
											</label>
											<label class="btn btn-secondary">
												<input type="radio" name="options" id="option3"> 25Kg
											</label>
										</div>
									</div>
								</div>
								<!-- Buy btn panel -->
								<div class="row">
									<div class="col-xs-12">
										<div class="buy-btn-panel bg-blue">
											<!-- Cart icon -->
											<div class="cart-icon">
												<i class="icofont icofont-basket"></i>
											</div>
											<!-- Btns -->
											<div class="btns-wrap btn-material bg-white">
												<a class="text-blue" href="#">Taruh di keranjang</a>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!-- Description -->
							<div class="row description">
								<div class="col-xs-12">
									<h2 class="header">
										Description:
									</h2>

									<p>
										Provident, similique quos ipsum quis porro hic, est libero sunt qui fuga, a, debitis! Molestias, explicabo ratione numquam consectetur dolor ad atque quia maiores nam dignissimos quaerat sed laborum expedita provident consequatur ut maxime placeat nesciunt incidunt itaque deserunt recusandae voluptate beatae distinctio?
									</p>

									<dl class="dl-horizontal terms">
										<dt><span class="body">Leather</span></dt><dd>30%</dd>
										<dt><span class="body">Polyester</span></dt><dd>25%</dd>
										<dt><span class="body">Guarantee</span></dt><dd>36 month</dd>
										<dt><span class="body">Leather</span></dt><dd>30%</dd>
										<dt><span class="body">Polyester</span></dt><dd>25%</dd>
										<dt><span class="body">Guarantee</span></dt><dd>36 month</dd>
									</dl>
								</div>
							</div>
						</div><!-- / CAPTION BLOCK -->
					</div>
					<!-- END: MAIN INFO -->
					<!--DESCRIPTION & COMMENTS -->
					<div class="row shop-item-info">
						<div class="col-xs-12">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs hidden-xs" role="tablist">
								<li role="presentation" class="active">
									<a href="#description"
									data-toggle="tab">Description</a>
								</li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active description" id="description">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis hic magni neque sint sapiente ducimus voluptate. Velit vero, cumque quam omnis architecto eum, facere tempora saepe reiciendis ut sunt. Quas aliquam, ipsum voluptas, ut deleniti earum ullam nam incidunt sit vitae veniam rem dicta tenetur vero ab atque consequuntur, quo eos voluptatibus nulla. Quaerat eveniet vel delectus ut autem quasi temporibus illum expedita nemo aut, fugit reiciendis veritatis maiores asperiores ratione cumque, hic eum. Id soluta ipsam quae eveniet illo dolor, molestiae, quam adipisci obcaecati maxime atque nesciunt nisi, sequi aspernatur saepe dolores sunt minima voluptatem hic velit consequatur. Dolorum!
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- END: DESCRIPTION & COMMENTS -->
				</div>
			</div>
		</div>
	</div>
</div>
