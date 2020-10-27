<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Update Data Type Produk</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>TypeProduk/prosesUpdate">
      <input type="hidden" name="id_type_product" value="<?php echo $dataTypeProduk->id_type_product ?>">
      <div class="box-body">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Type Produk</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Type" name="nama_type" aria-describedby="sizing-addon2" value="<?php echo $dataTypeProduk->nama_type ?>">
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
          <a href="<?php echo base_url() ?>TypeProduk" class="form-control btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i> Kembali
          </a>
        </div>
        
        <div class="col-md-3">
          
        </div>
    
      </div>
    </form>
    
  </div>
</div>
