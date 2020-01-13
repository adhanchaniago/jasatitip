<div class="container">
  <ul class="breadcrumb">
    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
    <li><a href="#">Akun</a></li>
    <li><a href="register.html">Daftar</a></li>
  </ul>
  <div class="col-sm-9" id="content">
    <h1>Daftar Akun</h1>
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= base_url().'req' ?>">
      <fieldset id="account">
        <legend>Data diri</legend>
        <div style="display: none;" class="form-group required">
          <div class="col-sm-10">
            <div class="radio">
              <label>
                <input type="radio" checked="checked" value="1" name="customer_group_id">
                Default</label>
              </div>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-firstname" class="col-sm-2 control-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-firstname" placeholder="Nama Lengkap" value="" name="nama" required>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email" required>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-telephone" class="col-sm-2 control-label">Telepon</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="input-telephone" placeholder="Telepon" value="" name="telepon" required>
            </div>
          </div>
        </fieldset>
        <fieldset id="address">
          <legend>Alamat User</legend>
          <div class="form-group required">
            <label for="input-address-1" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-address-1" placeholder="Alamat" value="" name="alamat" required>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-city" class="col-sm-2 control-label">Kota</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-city" placeholder="Kota" value="" name="kota" required>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Password Anda</legend>
          <div class="form-group required">
            <label for="input-password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" placeholder="Password" value="" name="password" required>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-confirm" class="col-sm-2 control-label">Konfirmasi Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="confirm_password" placeholder="Konfirmasi Password" value="" name="confirm" required>
            </div>
          </div>
        </fieldset>
        <div class="buttons">
          <input type="submit" class="btn btn-primary" value="Daftar">
        </div>
      </form>
    </div>
  </div>
  <script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

  function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Password Tidak Sama");
    } else {
      confirm_password.setCustomValidity('');
    }
  }

  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
</script>
