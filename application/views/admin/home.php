<div class="container">
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
				<?php foreach ($brg as $b): ?>
				<tr>
					<td><?= $b['id_barang'] ?></td>
					<td><?= $b['nama_barang'] ?></td>
					<td><?= $b['jenis_barang'] ?></td>
					<td><?= $b['harga'] ?></td>
					<td><?= $b['jumlah'] ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
