<div class="container">
	<ul class="breadcrumb">
		<li><a href="index.html"><i class="fa fa-home"></i></a></li>
		<li><a href="">Tambah Produk Baru</a></li>
	</ul>
	<div class="col-sm-9" id="content">
		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= base_url().'simpan_brg' ?>">
			<fieldset id="account">
				<div class="form-group required">
					<label for="input-nama" class="col-sm-2 control-label">Nama Barang</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="input-nama" name="nama" required>
					</div>
				</div>
				<div class="form-group required">
					<label for="input-jenis" class="col-sm-2 control-label">Jenis Barang</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="input-jenis"  name="jenis" required>
					</div>
				</div>
				<div class="form-group required">
					<label for="input-harga" class="col-sm-2 control-label">Harga</label>
					<div class="col-sm-6">
						<input type="number" class="form-control" id="input-harga"   name="harga" required>
					</div>
				</div>
				<div class="form-group required">
					<label for="input-jumlah" class="col-sm-2 control-label">Jumlah</label>
					<div class="col-sm-6">
						<input type="number" class="form-control" id="input-jumlah" name="jumlah" required>
					</div>
				</div>
				<div class="form-group required">
					<label for="input-jumlah" class="col-sm-2 control-label">Deskripsi</label>
					<div class="col-sm-6">
						<textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3" required></textarea>
					</div>
				</div>
				<div class="form-group required">
					<label for="input-jumlah" class="col-sm-2 control-label">Upload Gambar</label>
					<div class="col-sm-6">
						<input type="file" name="gambar" class="form-control-file" id="upload" required>
					</div>
				</div>
			</fieldset>
			<div class="buttons">
				<input type="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
</div>
