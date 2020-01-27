<div class="container top">
	<div class="col-md-10">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID Pesanan</th>
					<th>ALamat Tujuan</th>
					<th>Tanggal Pesanan</th>
					<th>Tanggal Kirim</th>
					<th>Tanggal Sampai</th>
					<th>Status Pesanan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pesanan as $p): ?>
				<tr>
					<td><?= $p['id_pesanan'] ?></td>
					<td><?= $p['alamat_tujuan'] ?></td>
					<td><?= $p['tanggal_pesanan'] ?></td>
					<td><?= $p['tanggal_kirim'] ?></td>
					<td><?= $p['tanggal_tiba'] ?></td>
					<td>
						<?php if ($p['status'] == '1'){ ?>
							Sedang Proses
						<?php }elseif($p['status'] == '2'){?>
							Proses Pengiriman
						<?php }elseif($p['status'] == '3'){ ?>
							Barang Sudah Tiba
						<?php } ?>
					</td>
					<td>
						<center>
							<a href="<?= base_url().'detail_pesanan/'.$p['id_pesanan'] ?>" class="btn btn-primary btn-sm">Detail Pesanan</a>
						</center>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
