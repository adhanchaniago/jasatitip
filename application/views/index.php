<div class="container">
	<div id="content" class="col-sm-12">
		<h3 class="productblock-title">Daftar Produk</h3>
		<div class="box">
			<?php foreach ($barang as $brg): ?>
				<div class="col-md-3">
					<div class="product-thumb transition">
						<div class="image product-imageblock">
							<img height="50%" src="<?= base_url().'asset/gambar/'.$brg['gambar'] ?>" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img responsive" />
						</div>
						<div class="button-group mt-5">
							<a type="button" href="<?= base_url().'detail_brg/'.$brg['id_barang'] ?>" class="addtocart-btn" >Detail Barang</a>
						</div>
						<div class="caption product-detail">
							<h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy"><?= $brg['nama_barang'] ?></a></h4>
							<p class="price product-price"> <span class="price-new">Rp.<?= number_format($brg['harga'], 0, ".", ".") ?></span></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
