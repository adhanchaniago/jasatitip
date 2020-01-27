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
				<h3>Tanggal Pesanan</h3>
				<h3>Tanggal Kirim</h3>
				<h3>Tanggal Tiba</h3>
				<h3>Status</h3>
			</div>
			<div class="col-md-6">
				<h3>: <?= $pesanan['id_pesanan'] ?></h3>
				<h3>: <?= $pesanan['nama'] ?></h3>
				<h3>: <?= $pesanan['alamat_tujuan'] ?></h3>
				<h3>: <?php echo tgl_indo($pesanan['tanggal_pesanan']); ?></h3>
				<h3>: <?php echo tgl_indo($pesanan['tanggal_kirim']); ?></h3>
				<h3>: <?php echo tgl_indo($pesanan['tanggal_tiba']); ?></h3>
				<h3>: <?php if ($pesanan['status'] == '1'){ ?>
					Sedang Proses
				<?php }elseif($pesanan['status'] == '2'){?>
					Proses Pengiriman
				<?php }elseif($pesanan['status'] == '3'){ ?>
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
	</div>
</div>
</div>
<?php
	function tgl_indo($tanggal){
		$bulan = array (
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);
		// variabel pecahkan 0 = tanggal
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tahun
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	} ?>
