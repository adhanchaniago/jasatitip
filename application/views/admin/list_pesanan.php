<div class="container">
	<div class="col-md-10">
		<ul class="breadcrumb">
			<li><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li><a href="">Daftar Pesanan</a></li>
		</ul>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID Pesanan</th>
					<th>Pemesan</th>
					<th>Alamat Tujuan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($brg as $b): ?>
				<tr>
					<td><?= $b['id_pesanan'] ?></td>
					<td><?= $b['nama'] ?></td>
					<td><?= $b['alamat_tujuan'] ?></td>
					<td><a href="<?= base_url().'detail/'.$b['id_pesanan'] ?>" class="btn btn-primary btn-sm">Detail Pesanan</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
