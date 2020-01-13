<div class="container">
	<ul class="breadcrumb">
		<li><a href="<?= base_url() ?>"><i class="fa fa-home"></i></a></li>
		<li><a href="">Detail Pesanan</a></li>
	</ul>
	<div id="content" class="col-sm-9">
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
				<h3>: <?= $pesanan['status'] ?></h3>
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
						<th>Action</th>
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
						<td>
							<center>
								<a href="<?= base_url() ?>" class="btn btn-primary btn-sm">Tambah Persediaan</a>
							</center>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
