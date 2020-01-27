<div class="container">
	<ul class="breadcrumb">
		<li><a href="<?= base_url() ?>"><i class="fa fa-home"></i></a></li>
		<li><a href="cart.html">Keranjang Pesanan</a></li>
	</ul>
	<div class="row">
		<div class="col-sm-12" id="content">
			<h1>Keranjang Pesanan</h1>
			<form enctype="multipart/form-data" method="post" action="#">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<td class="text-center">Gambar</td>
								<td class="text-left">Nama Barang</td>
								<td class="text-left">Jenis</td>
								<td class="text-left">Jumlah</td>
								<td class="text-right">Harga</td>
								<td class="text-right">Total</td>
							</tr>
						</thead>
						<tbody>
							<?php  if (!isset($detailbarang)) { ?>
								<h1>Tidak ada barang di keranjang</h1>
							<?php }else {
								$total =0;
								foreach ($detailbarang as $brg): ?>
								<tr>
									<td class="text-center"><img class="img-thumbnail" width="150px" title="women's clothing"src="<?= base_url().'asset/gambar/'.$brg['gambar'] ?>"></td>
									<td class="text-left"><a href="<?= base_url().'detail/'.$brg['id_barang'] ?>"><?= $brg['nama_barang'] ?></a></td>
									<td class="text-left"><?= $brg['jenis_barang'] ?></td>
									<td class="text-left">
										<div style="max-width: 200px;" class="input-group btn-block">
											<span class="input-group-btn">
												<form class="" action="<?= base_url().'update/'.$brg['id_pesanan'].'/'.$brg['id_barang'] ?>" method="post">
													<input type="text" class="form-control quantity" size="1" value="<?= $brg['jumlah_pesanan'] ?>" name="jmlh">
													<button class="btn btn-primary" title="" data-toggle="tooltip" type="submit" data-original-title="Update"><i class="fa fa-refresh"></i></button>
												</form>
												<form class="" action="<?= base_url().'delete/'.$brg['id_pesanan'].'/'.$brg['id_barang'] ?>" method="post">
													<button  class="btn btn-danger" title="" data-toggle="tooltip" type="submit" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
												</form>
											</span>
										</div	>
									</td>
									<td class="text-right">Rp.<?php echo number_format($brg['harga'], 0, ".", ".") ?></td>
									<td class="text-right">Rp.<?php echo number_format($brg['jumlah_pesanan'] * $brg['harga'], 0, ".", ".") ?></td>
								</tr>
							<?php
							$total = $total + $brg['jumlah_pesanan'] * $brg['harga'] ;
						endforeach; }?>
						</tbody>
					</table>
				</div>
				<form class="" action="<?= base_url().'proses/'. $this->session->uid?>" method="post">
					<div id="accordion" class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#alamat">Alamar Tujuan Pengiriman<i class="fa fa-caret-down"></i></a></h4>
							</div>
							<div class="panel-collapse collapse" id="alamat">
								<div class="panel-body">
									<p>Masukkan Alamat Tujuan Pengiriman</p>
									<div class="form-group required">
										<label for="input-postcode" class="col-sm-2 control-label">Alamat</label>
										<div class="col-sm-10">
											<input type="hidden" name="total" value="<?= $total ?>">
											<input type="text" class="form-control" id="input-postcode" placeholder="Alamat Tujuan" name="alamat">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-8">
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td class="text-right"><strong>Total:</strong></td>
										<td class="text-right">Rp.<?php echo number_format($total, 0, ".", ".") ?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="buttons">
						<div class="pull-right">
							<button class="btn btn-primary" name="submit" >Pesan</button>
						</div>
					</form>
				</div>
			</form>
		</div>
	</div>
</div>
