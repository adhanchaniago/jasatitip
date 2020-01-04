<div class="container">
	<ul class="breadcrumb">
		<li><a href="index.html"><i class="fa fa-home"></i></a></li>
		<li><a href="forgetpassword.html">Lupa Password</a></li>
	</ul>
	<div id="content" class="col-sm-9">
		<h1>Forgot Your Password?</h1>
		<form action="forgotten" method="post" enctype="multipart/form-data" class="form-horizontal">
			<fieldset>
				<legend>E-mail Anda </legend>
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
					<div class="col-sm-10">
						<input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" />
					</div>
				</div>
			</fieldset>
			<div class="buttons clearfix">
				<div class="pull-left"><a href="<?= base_url().'login' ?>" class="btn btn-default">Back</a></div>
				<div class="pull-right">
					<input type="submit" value="Continue" class="btn btn-primary" />
				</div>
			</div>
		</form>
	</div>
</div>
