<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Update Data Slider Produk</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>SliderProduk/prosesUpdate">
      <input type="hidden" name="id_slider" value="<?php echo $dataSliderProduk->id_slider ?>">
      <input type="hidden" name="id" value="<?php echo $dataSliderProduk->id_product ?>">
      <div class="box-body">

        <!-- Nama Produk -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Produk" name="nama_product" aria-describedby="sizing-addon2" value="<?php echo $dataSliderProduk->nama_product ?>" readonly="">
          </div>
        </div>

        <!-- Gambar -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" placeholder="Gambar Produk" name="gambar" aria-describedby="sizing-addon2" value="<?php echo $dataSliderProduk->gambar ?>" >
          </div>
        </div>

        <!-- Deskripsi -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Deskipsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi" aria-describedby="sizing-addon2" value="<?php echo $dataSliderProduk->deskripsi ?>" >
          </div>
        </div>

        

      </div>

      <div class="form-group">
        <div class="col-md-3">
          
        </div>

        <div class="col-md-3">
            <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
        </div>
        
        <div class="col-md-3">
          <a href="<?php echo base_url() ?>SliderProduk/tampil/<?php echo $dataSliderProduk->id_product ?>" class="form-control btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i> Kembali
          </a>
        </div>

        <div class="col-md-3">
          
        </div>
    
      </div>
    </form>
    
  </div>
</div>
