<?php 
  $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $uri_segments = explode('/', $uri_path);
  $id = $uri_segments[3];

 ?>

<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Tambah Data Produk</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>SliderProduk/prosesTambah">
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <div class="box-body">
        <!-- Nama Produk -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Produk" name="id_product" aria-describedby="sizing-addon2" readonly="" value="<?php echo $dataSliderProduk->nama_product ?>">
          </div>
        </div>

        <!-- Gambar -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Gambar Produk</label>

          <div class="col-sm-10">
            <input type="file" class="form-control" placeholder="Gambar Produk" name="gambar" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Deskripsi Produk -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi Produk</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Deskripsi Produk" name="deskripsi" aria-describedby="sizing-addon2" >
          </div>
        </div>

      </div>

      <div class="form-group">
        <div class="col-md-3">
          
        </div>

        <div class="col-md-3">
            <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
        </div>
        
        <div class="col-md-3">
          <a href="<?php echo base_url() ?>SliderProduk/tampil/<?php echo $id ?>" class="form-control btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i> Kembali
          </a>
        </div>

        <div class="col-md-3">
          
        </div>
    
      </div>
    </form>
    
  </div>
</div>
