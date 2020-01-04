<div class="container">
  <ul class="breadcrumb">
    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
    <li><a href="category.html">Beras</a></li>
    <li><a href="#"><?= $brg['nama_barang'] ?></a></li>
  </ul>
  <div class="row">
    <div id="content" class="col-sm-9">
      <div class="row">
        <div class="col-sm-6">
          <div class="thumbnails">
            <div><img src="<?= base_url().'asset/gambar/'.$brg['gambar'] ?>" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" /></div>
          </div>
        </div>
        <div class="col-sm-6">
          <h1 class="productpage-title"><?= $brg['nama_barang'] ?></h1>
          <ul class="list-unstyled productinfo-details-top">
            <li>
              <h2 class="productpage-price">Rp.<?= $brg['harga'] ?></h2>
            </li>
          </ul>
          <hr>
          <ul class="list-unstyled product_info">
            <li>
              <label>Persediaan:</label>
              <span> <?= $brg['jumlah'] ?></span></li>
            </ul>
            <hr>
            <p class="product-desc"> More room to move.
              With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.
              Cover Flow.
              Browse through your music collection by flipping..</p>
              <div id="product">
                <?php if (isset($this->session->uid)){ ?>
                  <form class="" action="<?= base_url().'tambah/'.$brg['id_barang'] ?>" method="post">
                    <div class="form-group">
                      <label class="control-label qty-label" for="input-quantity">Jumlah</label>
                      <input type="number" name="jumlah" value="1" id="input-quantity" class="form-control productpage-qty" />
                      <div class="btn-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block addtocart">Tambah Ke keranjang</button>
                      </div>
                    </div>
                  </form>
                <?php }else {?>
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-lg btn-block addtocart" onclick="location.href='<?= base_url().'login' ?>'">Login</button>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="productinfo-tab">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab-description">
                <div class="cpt_product_description ">
                  <div>
                    <p> <strong>More room to move.</strong></p>
                    <p> With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.</p>
                    <p> <strong>Cover Flow.</strong></p>
                    <p> Browse through your music collection by flipping through album art. Select an album to turn it over and see the track list.</p>
                  </div>
                </div>
                <!-- cpt_container_end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
