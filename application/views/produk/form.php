<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Tambah Data Produk</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>Produk/prosesTambah">
      
      <div class="box-body">
        <!-- Nama Produk -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Produk" name="nama_product" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Kategori Product -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori Product</label>

          <div class="col-sm-10">
            <select name="id_kategori_product" class="form-control " aria-describedby="sizing-addon2">
              <option disabled selected="">Nama Kategori Product</option>
              <?php
              foreach ($dataKategoriProduk->result() as $kategori) {
                ?>
                <option value="<?php echo $kategori->id_kategori_product; ?>">
                  <?php echo $kategori->nama_kategori; ?>
                </option>
                <?php
              }
              ?>
            </select>
          </div>
        </div>

        <!-- Type Product -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Type Product</label>

          <div class="col-sm-10">
            <select name="id_type_product" class="form-control " aria-describedby="sizing-addon2">
              <option disabled selected="">Nama Type Product</option>
              <?php
              foreach ($dataTypeProduk->result() as $type) {
                ?>
                <option value="<?php echo $type->id_type_product; ?>">
                  <?php echo $type->nama_type; ?>
                </option>
                <?php
              }
              ?>
            </select>
          </div>
        </div>

        <!-- Body -->
        <!-- /.box-header -->
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Body</label>
          <div class="col-sm-10">
                <textarea id="editor1" name="body" rows="10" cols="80" placeholder="Isi Body"></textarea>
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
          <a href="<?php echo base_url() ?>Produk" class="form-control btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i> Kembali
          </a>
        </div>

        <div class="col-md-3">
          
        </div>
    
      </div>
    </form>
    
  </div>
</div>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1',{
      // filebrowserUploadUrl: '<?php echo base_url() ?>Quiz/upload?type=Files&CKEditorFuncNum=2',
      // extraPlugins: 'uploadwidget,uploadimage,filebrowser'

      filebrowserImageUploadUrl : '<?php echo base_url(); ?>Produk/upload?type=image&path=product'
    })
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>