<header>
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="top-right pull-right">
						<div id="top-links" class="nav pull-right">
							<ul class="list-inline">
								<li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>My Account</span> <span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<?php if (isset($this->session->uid)){ ?>
											<li><a href="<?= base_url().'logout' ?>">Keluar Akun</a></li>
										<?php }else {?>
										<li><a href="<?= base_url().'register' ?>">Register</a></li>
										<li><a href="<?= base_url().'login' ?>">Login</a></li>
									<?php } ?>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="header-inner">
			<div class="col-sm-4 col-xs-6 header-left">
				<div class="shipping">
					<div class="shipping-img"></div>
					<div class="shipping-text">082188640489</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12 header-middle">
				<div class="header-middle-top">
					<div id="logo">
						<!-- <a href="index.html"><img src="<?= base_url().'asset/image/logo.png' ?>" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a>  -->
						<h1>Jastip Wanuakku</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12 header-right">
				<div id="cart" class="btn-group btn-block">
					<span id="cart-total">
						<?php if (isset($this->session->uid)){ ?>
					<form class="" action="<?= base_url().'keranjang/'.$this->session->uid ?>" method="post">
						<button type="submit" class="btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button">
							<span class="cart-title">Keranjang Pesanan</span><br>
						</button>
					</form>
				<?php }else {?>
					<a href="<?= base_url().'login' ?>" class="btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button">Keranjang Pesanan</a>
				<?php } ?>
					</span>
				</div>
			</div>
		</div>
	</div>
</header>
<nav id="menu" class="navbar">
  <div class="nav-inner container">
    <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
      <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
    </div>
    <div class="navbar-collapse">
      <ul class="main-navigation">
        <li><a href="<?= base_url() ?>"   class="parent"  >Halaman Utama</a> </li>
				<?php if ($this->session->status == "admin"): ?>
					<li><a href="<?= base_url().'daftar_pesanan' ?>" >Daftar Pesanan</a></li>
				<?php endif; ?>
        <li><a href="contact.html" >Contact Us</a> </li>
      </ul>
    </div>
  </div>
</nav>
