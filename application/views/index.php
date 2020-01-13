<div class="container">
	<div class="row">
		<div id="content" class="col-sm-12">
			<h3 class="productblock-title">Featured Products</h3>
			<div class="box">
				<div class="row">
					<?php foreach ($barang as $brg): ?>
						<div class="col-md-4">
							<div class="product-thumb transition">
								<div class="image product-imageblock"> <a href="product.html"> <img height="50%" src="<?= base_url().'asset/gambar/'.$brg['gambar'] ?>" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
									<div class="button-group">
										<a type="button" href="<?= base_url().'detail_brg/'.$brg['id_barang'] ?>" class="addtocart-btn" >Detail Barang</a>
									</div>
								</div>
								<div class="caption product-detail">
									<h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy"><?= $brg['nama_barang'] ?></a></h4>
									<p class="price product-price"> <span class="price-new">Rp.<?= number_format($brg['harga'], 0, ".", ".") ?></span></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
