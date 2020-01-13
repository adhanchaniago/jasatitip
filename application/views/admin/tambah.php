<div class="container">
	<ul class="breadcrumb">
		<li><a href="index.html"><i class="fa fa-home"></i></a></li>
		<li><a href="">Tambah Persediaan</a></li>
	</ul>
	<div class="col-sm-9" id="content">
		<h1>Tambah Persediaan Barang</h1>
		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= base_url().'simpan_stok/'.$brg['id_barang'] ?>">
			<fieldset id="account">
				<div class="form-group">
					<label for="input-nama" class="col-sm-2 control-label">Nama Barang</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="input-nama" value="<?= $brg['nama_barang'] ?>" name="nama" readonly>
					</div>
				</div>
				<div class="form-group">
					<label for="input-jenis" class="col-sm-2 control-label">Jenis Barang</label>
					<div class="col-sm-6">
						<input type="email" class="form-control" id="input-jenis"  value="<?= $brg['jenis_barang'] ?>" name="jenis" readonly>
					</div>
				</div>
				<div class="form-group">
					<label for="input-harga" class="col-sm-2 control-label">Harga</label>
					<div class="col-sm-6">
						<input type="tel" class="form-control" id="input-harga"  value="<?= $brg['harga'] ?>" name="harga" required>
					</div>
				</div>
				<div class="form-group required">
					<label for="input-jumlah" class="col-sm-2 control-label">Jumlah</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="input-jumlah" value="" name="jumlah" required>
					</div>
				</div>
			</fieldset>
			<div class="buttons">
				<input type="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
</div>
