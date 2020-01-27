<div class="container">
  <ul class="breadcrumb">
    <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i></a></li>
    <li><a href="">Beras</a></li>
    <li><a href=""><?= $brg['nama_barang'] ?></a></li>
  </ul>
  <div id="content" class="col-sm-9">
    <div class="row">
      <div class="col-sm-6">
        <div class="thumbnails">
          <div><img src="<?= base_url().'asset/gambar/'.$brg['gambar'] ?>" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" width="100%"/></div>
        </div>
      </div>
      <div class="col-sm-6">
        <h1 class="productpage-title"><?= $brg['nama_barang'] ?></h1>
        <ul class="list-unstyled productinfo-details-top">
          <li>
            <h2 class="productpage-price">Rp.<?= number_format($brg['harga'], 0, ".", ".") ?></h2>
          </li>
        </ul>
        <hr>
        <ul class="list-unstyled product_info">
          <li>
            <?php if ($pesan == '1'){ ?>
              <div class="alert alert-danger" role="alert">
                Stok Tidak Cukup !!
              </div>
            <?php }?>
            <label>Persediaan:</label>
            <?php if (isset($brg['jumlah'])) { ?>
              <span> <?= $brg['jumlah'] ?></span></li>
            <?php }else {?>
              <span class="stok">Stok habis</span></li>
            <?php } ?>
          </ul>
          <hr>
          <div id="product">
            <?php if (isset($this->session->uid)){ ?>
              <form class="" action="<?= base_url().'tambah/'.$brg['id_barang'] ?>" method="post">
                <div class="form-group">
                  <label class="control-label qty-label" for="input-quantity">Jumlah</label>
                  <input type="hidden" name="harga" value="<?=$brg['harga'] ?>">
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
          <li class="active"><a href="#tab-description" data-toggle="tab">Deskripsi</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab-description">
            <div class="cpt_product_description ">
              <div>
                <p><?= $brg['deskripsi'] ?></p>
              </div>
            </div>
            <!-- cpt_container_end -->
          </div>
        </div>
      </div>
    </div>
  </div>
