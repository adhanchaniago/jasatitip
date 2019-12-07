<!--SLIDESHOW
=============================================== -->
<div class="container-fluid">
	<div class="row">
		<div class="clearfix">
			<div class="owl-carousel slideshow">
				<!-- Item -->
				<div class="item">
					<div class="container">
						<div class="row">

							<div class="col-sm-12 col-md-5 hidden-xs hidden-sm">

								<!-- Header -->
								<h2 class="header text-uppercase text-blue">Camera</h2>

								<!-- Text -->
								<p>
									Lorem ipsum dolor sit amet
								</p>

								<!-- Buttons -->
								<span class="btn-panel">

									<span class="sdw-wrap">
										<a href="shop-item.html" class="sdw-hover btn btn-lg btn-material btn-default"><span class="body">Detail Barang</span></a>
										<span class="sdw"></span>
									</span>

									<span class="hor-divider"></span>

									<span class="sdw-wrap">
										<a href="shop-item.html" class="sdw-hover btn btn-lg btn-material btn-primary"><i class="icon icofont icofont-basket"></i><span class="body">Beli Sekarang</span></a>
										<span class="sdw"></span>
									</span>
								</span>
							</div>

							<div class="col-xs-10 col-xs-offset-1 col-md-7 col-md-offset-0">

								<!-- Image -->
								<div class="img">
									<img src="<?= base_url().'asset/images/slideshow/img-03.png' ?>" alt="">
								</div>

								<!-- Badge -->
								<!--span class="sale-badge bg-green text-uppercase">
								new
							</span-->

							<!-- Price -->
							<span class="price hidden-xs">
								<span class="wrap text-red">
									$1 254
								</span>
							</span>

							<!-- Mobile button -->
							<span class="text-center visible-xs">
								<span class="sdw-wrap">
									<a href="#" class="sdw-hover btn btn-lg btn-material btn-primary"><i class="icon icofont icofont-basket"></i><span class="body">$1 254<small>.50</small></span></a>
									<span class="sdw"></span>
								</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- END: SLIDESHOW -->

<!--BLOCK POPULAR ON SHOP -->
<div class="container-fluid block bg-grey-lightness space-top">
	<div class="row">

		<div class="container space-top">
			<div class="row">

				<!-- Asside -->
				<div class="col-md-4 col-lg-3 asside">
					<!-- Asside nav -->
					<div class="asside-nav bg-white hidden-xs">
						<div class="header text-uppercase text-white bg-blue">
							Kategori
						</div>

						<ul class="nav-vrt bg-white">
							<li class="active">
								<a href="#" class="btn-material">Beras</a>
								<a href="#" class="btn-material">Telur</a>
								<a href="#" class="btn-material">Cobek</a>
								<a href="#" class="btn-material">Pisau</a>
								<a href="#" class="btn-material">Ayam Potong</a>
							</li>
						</ul>
					</div><!-- / Asside nav -->
					<!-- List categories for mobile -->
					<div class="inblock padding-none visible-xs">
						<div class="mobile-category nav-close">

							<!-- Header -->
							<div class="header bg-blue">
								<span class="head">Kategori</span>

								<span class="btn-swither" >
									<span></span>
									<span></span>
									<span></span>
								</span>
							</div>

							<ul class="nav-vrt bg-white">
								<li class="active">
									<a href="#" class="btn-material">Beras
										<i class="nav-icon-open icofont icofont-plus"></i>
										<i class="nav-icon-close icofont icofont-minus"></i>
									</a>

									<div class="sub-nav bg-grey-light">
										<ul class="sub">
											<li>
												<a href="#" class="btn-material">Shirts</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div><!-- ./ Asside -->

				<!-- Item list -->
				<div class="col-md-8 col-lg-9 shop-items-set shop-items-full">
					<!-- Item list -->
					<div class="row item-wrapper">
						<?php foreach ($barang as $brg) : ?>
						<!-- Shop item 2 -->
						<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

							<div class="wrap">

								<!-- Image & Caption -->
								<div class="body">

									<!-- Header -->
									<div class="comp-header st-4 text-uppercase">
										<?= $brg['nama_barang'] ?>
									</div>
									<!-- Image -->
									<div class="image">
										<img class="main" src="<?= base_url().'asset/images/shop/img-02.jpg' ?>" alt="">
									</div>
									<!-- Caption -->
									<div class="caption">
										<!-- Text -->
										<p class="text item_barang">
											Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
										</p>
									</div>
								</div>
								<!-- Buy btn & more link -->
								<div class="info">
									<!-- Buy btn -->
									<div class="class="btn-material btn-price"">
										<!-- Price -->
										<span class="price">
											<!-- Currency -->
											<span class="curr">Rp.</span>
											<!-- Price -->
											<span class="price">
												<?= $brg['harga'] ?>
											</span>
										</span>
										<!-- Icon card -->
										<span class="icon-card">
											<a href="<?= base_url().'detail/'.$brg['id_barang'] ?>" class="more-link">Detail Barang</a>
										</span>
									</div>
								</div>
							</div>
						</div>
						<!-- / Shop item -->
					<?php  endforeach; ?>
					</div>
					<!-- Paginations -->
					<div class="row pagination-block bottom">
						<div class="col-xs-12">
							<div class="wrap">
								<!-- Pagination -->
								<ul class="pagination">
									<li>
										<a href="#">
											<span><i class="icofont icofont-rounded-left"></i></span>
										</a>
									</li>
									<li><a href="#">01</a></li>
									<li class="active"><a href="#">02</a></li>
									<li><a href="#">03</a></li>
									<li>
										<a href="#">
											<span><i class="icofont icofont-rounded-right"></i></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- ./ Item list -->
			</div>
		</div>
	</div><!-- / Parallax wrapper -->
</div>
<!-- END: POPULAR ON SHOP -->
