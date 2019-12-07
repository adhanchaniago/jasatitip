<div class="container">
	<div class="row auth-form">
		<div class="col-md-5 col-md-offset-1 form-fields">
			<form action="" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
						<a href="#">lupa password</a>
					</li>
				</ul>
			</form>
		</div>
	</div>
</div>
