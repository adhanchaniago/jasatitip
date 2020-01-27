<div class="container top">
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
				<?php foreach ($brg as $b): ?>
				<tr>
					<td><?= $b['id_barang'] ?></td>
					<td><?= $b['nama_barang'] ?></td>
					<td><?= $b['jenis_barang'] ?></td>
					<td>Rp.<?= number_format($b['harga'], 0, ".", ".") ?></td>
					<td><?= $b['jumlah'] ?></td>
					<td>
						<center>
							<a href="<?= base_url().'tambah_stok/'.$b['id_barang'] ?>" class="btn btn-primary btn-sm">Tambah Persediaan</a>
						</center>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
