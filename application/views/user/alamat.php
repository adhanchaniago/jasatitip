<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="breadcrumb bg-blue">
				<h4 style="color:#fff;">Keranjang</h4>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row block none-padding-top">
		<div class="col-xs-12">
			<ul class="steps row">
				<li class="active col-xs-12 col-sm-4 col-md-4 col-lg-3">
					<div class="icon number bg-blue">
						1
					</div>
					<span>
						Konfirmasi
					</span>
					Daftar Barang
					<span class="dir-icon">
						<i class="icofont icofont-stylish-right"></i>
					</span>
				</li>
				<li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
					<div class="icon number bg-blue">
						2
					</div>
					<span>
						Isi
					</span>
					Alamat Tujuan
					<span class="dir-icon hidden-xs">
						<i class="icofont icofont-stylish-right text-yellow"></i>
					</span>
				</li>
				<li class="hidden-xs col-lg-3 hidden-sm hidden-md">
					<div class="icon number bg-grey">
						3
					</div>
					<span>
						Confirm
					</span>
					your order
				</li>
			</ul>
		</div>
	</div>
	<!-- END: STEPS -->
	<!--
	CONTENT
	=============================================== -->
	<div class="row block none-padding-top">

		<div class="col-xs-12 col-md-8 col-lg-9 get-height">
			<div class="sdw-block">
				<div class="wrap bg-white">

					<!-- Authirize form -->
					<div class="row auth-form">

						<!-- Header & nav -->
						<div class="col-md-12">

							<!-- Header -->
							<h1 class="header text-uppercase">
								Authirization
								<span>
									required
								</span>
							</h1>

						</div>

						<div class="col-md-4">
							<!-- Text -->
							<span class="text">
								Magni labore ratione maiores, laborum quaerat molestiae excepturi. Corporis, necessitatibus earum.
							</span>

							<!-- Nav -->
							<div class="asside-nav no-bg">
								<ul class="nav-vrt border">
									<li class="active">
										<a href="#" class="btn-material">Privacy policy</a>
									</li>

									<li>
										<a href="#" class="btn-material">Terms and conditions</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-md-offset-1">
							<form>
								<div class="form-group">
									<label for="exampleInputEmail2">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email"required>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword2">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
								</div>

								<span class="sdw-wrap">
									<button type="submit" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">Login</button>
									<span class="sdw"></span>
								</span>

								<ul class="addon-login-btn">
									<li>
										<a href="<?= base_url().'register' ?>">register</a>
									</li>
									<li>or</li>
									<li>
										<a href="#">restore password</a>
									</li>
								</ul>
							</form>
						</div>
					</div>
					<!-- / Authirize form -->

					<div class="row">
						<div class="col-xs-12">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading" id="headingTwo">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<span class="panel-indicator"></span>
												Masukan Alamat Tujuan
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse in">
										<div class="panel-body">

											<form class="form-horizontal" action="" method="post">
												<div class="form-group pd-none">
													<label for="route" class="col-sm-3 control-label text-darkness">Alamat Tujuan</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="route">
													</div>
												</div>

												<div class="form-group pd-none">
													<label for="locality" class="col-sm-3 control-label text-darkness">Kota</label>
													<div class="col-sm-8">
														<input type="text"class="form-control"id="locality">
													</div>
												</div>

												<div class="form-group pd-none">
													<label for="postal_code" class="col-sm-3 control-label text-darkness">Kode Pos</label>
													<div class="col-sm-8">
														<input type="text"class="form-control"id="postal_code">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-offset-3 col-sm-8">
														<span class="sdw-wrap">
															<a href="card-page-step-3.html" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">Berikutnya</a>
															<span class="sdw"></span>
														</span>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
