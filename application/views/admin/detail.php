<div class="container">
	<ul class="breadcrumb">
		<li><a href="<?= base_url() ?>"><i class="fa fa-home"></i></a></li>
		<li><a href="">Detail Pesanan</a></li>
	</ul>
	<div id="content" class="col-sm-10">
		<div class="row">
			<div class="col-md-6">
				<h3>Id Pesanan</h3>
				<h3>Nama Pemesan</h3>
				<h3>Alamat Tujuan</h3>
				<h3>Status</h3>
			</div>
			<div class="col-md-6">
				<h3>: <?= $pesanan['id_pesanan'] ?></h3>
				<h3>: <?= $pesanan['nama'] ?></h3>
				<h3>: <?= $pesanan['alamat_tujuan'] ?></h3>
				<h3>: <?php if ($pesanan['status'] = '1'){ ?>
					Sedang Proses
				<?php }elseif($pesanan['status'] = '2'){?>
					Proses Pengiriman
				<?php }elseif($pesanan['status'] = '3'){ ?>
					Barang Sudah Tiba
				<?php } ?>
			</h3>
		</div>
	</div>
	<div class="col-md-10 mt-5">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID Barang</th>
					<th>Nama Barang</th>
					<th>Jenis Barang</th>
					<th>Harga Barang</th>
					<th>Jumlah Barang</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($brg as $c): ?>
					<tr>
						<td><?= $c['id_barang'] ?></td>
						<td><?= $c['nama_barang'] ?></td>
						<td><?= $c['jenis_barang'] ?></td>
						<td>Rp.<?= number_format($c['harga'], 0, ".", ".") ?></td>
						<td><?= $c['jumlah_pesanan'] ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php if (!isset($pesanan['tanggal_kirim'])): ?>
			<form class="" action="<?= base_url().'proses_pesanan/'.$pesanan['id_pesanan'] ?>" method="post">
				<div class="row">
					<div class="form-group">
						<label for="input-jenis" class="col-sm-2 control-label">Tanggal Kirim</label>
						<input type="date" name="tgl_kirim" value="" required>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<label for="input-jenis" class="col-sm-2 control-label">Tanggal Tiba</label>
						<input type="date" name="tgl_tiba" value="" required>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary"  value="Simpan">
				</div>
			</form>
		<?php endif; ?>
	</div>
</div>
</div>
