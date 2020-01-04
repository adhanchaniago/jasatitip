<div class="container">
	<ul class="breadcrumb">
		<li><a href="index.html"><i class="fa fa-home"></i></a></li>
		<li><a href="#">Akun</a></li>
		<li><a href="login.html">Login</a></li>
	</ul>
	<div class="col-sm-9" id="content">
		<div class="row">
			<div class="col-sm-6">
				<div class="well">
					<h2>Akun Baru</h2>
					<p><strong>Daftar Akun</strong></p>
					<p>Daftar akun untuk dapat melakukan pesanan barang.</p>
					<a class="btn btn-primary" href="<?= base_url().'register' ?>">Daftar</a></div>
				</div>
				<div class="col-sm-6">
					<div class="well">
						<h2>Login Akun</h2>
						<?php if ($failed == 1): ?>
							<div class="alert alert-danger" role="alert">
								E-mail atau password salah. Silakan Cek Kembali!
							</div>
						<?php endif; ?>
						<form enctype="multipart/form-data" method="post" action="<?= base_url().'signin' ?>">
							<div class="form-group">
								<label for="input-email" class="control-label">E-Mail Address</label>
								<input type="text" class="form-control" id="input-email" placeholder="E-Mail Address" value="" name="email">
							</div>
							<div class="form-group">
								<label for="input-password" class="control-label">Password</label>
								<input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
								<a href="forgetpassword.html">Forgotten Password</a></div>
								<input type="submit" class="btn btn-primary" value="Login">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
