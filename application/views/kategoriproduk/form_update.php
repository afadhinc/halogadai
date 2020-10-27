<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Update Data Kategori Produk</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>KategoriProduk/prosesUpdate">
      <input type="hidden" name="id_kategori_product" value="<?php echo $dataKategoriProduk->id_kategori_product ?>">
      <div class="box-body">
        <!-- Nama Ecommerce -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori Produk</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Kategori Produk" name="nama_kategori" aria-describedby="sizing-addon2" value="<?php echo $dataKategoriProduk->nama_kategori ?>">
          </div>
        </div>

         <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Gambar Kategori</label>

          <div class="col-sm-10">
            <input type="file" class="form-control" placeholder="Foto" name="gambar_kategori" aria-describedby="sizing-addon2" value="<?php echo $dataKategoriProduk->gambar_kategori ?>">
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
		
        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Link Kategori Produk</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Link Kategori Produk" id="validasi" name="url_kategori" aria-describedby="sizing-addon2" value="<?php echo $dataKategoriProduk->url_kategori ?>">
            <span id="pesan"></span>

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
          <a href="<?php echo base_url() ?>KategoriProduk" class="form-control btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i> Kembali
          </a>
        </div>

        <div class="col-md-3">
          
        </div>
    
      </div>
    </form>
    
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
  $('#validasi').keyup(function() {
      if (this.value.match(/[^a-z-A-Z-0-9_]/g)) {
          this.value = this.value.replace(/[^a-z-A-Z-0-9_]/g, '');
      }
        link(this.value);
        // console.log(this.value);
        
    });
  });
</script>

<script type="text/javascript">

  function link(linkprogram){
    
    $.ajax({
      method: "POST",
      url: "<?php echo base_url('KategoriProduk/prosesCek'); ?>",
      data: {

        url_kategori: linkprogram
      } 
      
    })
    
    .done(function(data) {
      $('#pesan').html(data);
      
      if (data == "Link sudah ada yang menggunakan") {
        document.getElementById("pesan").value = "Link sudah ada yang menggunakan";
        document.getElementById("pesan").style.color = "red";
      }else{
        document.getElementById("pesan").value = "Link belum ada yang menggunakan";
        document.getElementById("pesan").style.color = "blue";
      }
    })
    
  }

</script>


<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1',{
      // filebrowserUploadUrl: '<?php echo base_url() ?>Quiz/upload?type=Files&CKEditorFuncNum=2',
      // extraPlugins: 'uploadwidget,uploadimage,filebrowser'

      filebrowserImageUploadUrl : '<?php echo base_url(); ?>AboutUs/upload?type=image&path=aboutus'
    })
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>