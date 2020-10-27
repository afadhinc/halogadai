<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Update Data Article</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>Article/prosesUpdate">
      <input type="hidden" name="id_article" value="<?php echo $dataArticle->id_article ?>">
      <input type="hidden" name="id_user" value="<?php echo $dataArticle->id_user ?>">
      <div class="box-body">
        <!-- Tittle -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tittle</label>
          
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Tittle" name="title" aria-describedby="sizing-addon2" value="<?php echo $dataArticle->title ?>">
          </div>
        </div>

        <!-- Nama Menu -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori</label>

          <div class="col-sm-10">
            <select name="id_menu" class="form-control select2"  aria-describedby="sizing-addon2">
              <?php
              foreach ($dataMenu->result() as $menu) {
                ?>
                <option value="<?php echo $menu->id_menu; ?>" <?php if($menu->id_menu == $dataArticle->id_menu){echo "selected='selected'";} ?>><?php echo $menu->nama_menu; ?></option>
                <?php
              }
              ?>
            </select>
          </div>
        </div>

        <!-- Nama Kategori Article -->
        <!-- <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Kategori Article</label>

          <div class="col-sm-10">
            <select name="id_kategori_article" class="form-control select2"  aria-describedby="sizing-addon2">
              <?php
              foreach ($dataKategoriArticle->result() as $kategori) {
                ?>
                <option value="<?php echo $kategori->id_kategori_article; ?>" <?php if($kategori->id_kategori_article == $dataArticle->id_kategori_article){echo "selected='selected'";} ?>><?php echo $kategori->nama_kategori_article; ?></option>
                <?php
              }
              ?>
            </select>
          </div>
        </div> -->
        
        <!-- Foto Artikel -->
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Images Article</label>
          
          <div class="col-sm-10">
            <input type="file" class="form-control" placeholder="Foto" name="images" aria-describedby="sizing-addon2" value="<?php echo $dataArticle->images ?>">
          </div>
        </div>

        <!-- Body -->
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Body</label>
          <div class="col-sm-10">
              <textarea id="editor1" name="body" rows="10" cols="80" placeholder="Isi Body"><?php echo $dataArticle->body ?></textarea>
          </div>
        </div>

        <!-- Alias Url -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Alias Url</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" id="validasi" placeholder="Alias Url" name="alias_url" aria-describedby="sizing-addon2" value="<?php echo $dataArticle->alias_url ?>">
            <span id="pesan"></span>
          </div>
        </div>

        <!-- Status Published -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Status Published</label>

          <div class="col-sm-10">
            <input type="radio" name="status_published" value="1" <?php if($dataArticle->status_published == 1) echo 'checked="checked"'; ?>>Published

            <input type="radio" name="status_published" value="0" <?php if($dataArticle->status_published == 0) echo 'checked="checked"'; ?>>Not Published
            
          </div>
        </div>

        <!-- Status Promoted -->
        <!-- <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Status Promoted</label>

          <div class="col-sm-10">
            <input type="radio" name="status_promoted" value="1" <?php if($dataArticle->status_promoted == 1) echo 'checked="checked"'; ?>>Promoted

            <input type="radio" name="status_promoted" value="0" <?php if($dataArticle->status_promoted == 0) echo 'checked="checked"'; ?>>Not Promoted
            
          </div>
        </div> -->

        <!-- Tanggal Article-->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Article</label>

          <div class="col-sm-10">
            <input type="datetime" class="form-control" placeholder="Tanggal Article" id="datetimepicker_unixtime" name="tgl_article" aria-describedby="sizing-addon2" value="<?php echo $dataArticle->tgl_article ?>" readonly="">
          </div>
        </div>

        <!-- Tags -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tags</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Tags" name="tags" value="<?php echo $dataArticle->tags ?>" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Meta Keyword -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Meta Keyword</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Meta Keyword" name="meta_keyword" aria-describedby="sizing-addon2" value="<?php echo $dataArticle->meta_keyword ?>">
          </div>
        </div>

        <!-- Meta Description -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Meta Description</label>

          <div class="col-sm-10">
            <!-- <input type="text" class="form-control" placeholder="Meta Description" name="meta_description" aria-describedby="sizing-addon2"> -->
            <textarea class="form-control" name="meta_description" cols="50"><?php echo $dataArticle->meta_description ?></textarea>
          </div>
        </div>

        <!-- Meta Title -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Meta Title</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Meta Title" name="meta_title" aria-describedby="sizing-addon2" value="<?php echo $dataArticle->meta_title ?>">
          </div>
        </div>

        <!-- Meta Image -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Meta Image</label>

          <div class="col-sm-10">
            <input type="file" class="form-control" placeholder="Meta Title" name="meta_image" aria-describedby="sizing-addon2" value="<?php echo $dataArticle->meta_image ?>">
          </div>
        </div>

        <!-- Hasil A -->
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Hasil A</label>
          <div class="col-sm-10">
              <textarea id="editor2" name="hasilA" rows="10" cols="80" placeholder="Hasil A"><?php echo $dataArticle->hasilA ?></textarea>
          </div>
        </div>

        <!-- Hasil B -->
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Hasil B</label>
          <div class="col-sm-10">
              <textarea id="editor3" name="hasilB" rows="10" cols="80" placeholder="Hasil B"><?php echo $dataArticle->hasilB ?></textarea>
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
          <a href="<?php echo base_url() ?>Article" class="form-control btn btn-danger">
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

      filebrowserImageUploadUrl : '<?php echo base_url(); ?>Article/upload?type=image&path=imgMenstruasi'
    })
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2',{
      // filebrowserUploadUrl: '<?php echo base_url() ?>Quiz/upload?type=Files&CKEditorFuncNum=2',
      // extraPlugins: 'uploadwidget,uploadimage,filebrowser'

      filebrowserImageUploadUrl : '<?php echo base_url(); ?>Article/upload?type=image&path=imgMenstruasi'
    })
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3',{
      // filebrowserUploadUrl: '<?php echo base_url() ?>Quiz/upload?type=Files&CKEditorFuncNum=2',
      // extraPlugins: 'uploadwidget,uploadimage,filebrowser'

      filebrowserImageUploadUrl : '<?php echo base_url(); ?>Article/upload?type=image&path=imgMenstruasi'
    })
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<script type="text/javascript">
  jQuery('#datetimepicker_unixtime').datetimepicker({
    format:'Y-m-d H:i:s'
  });
  
</script>

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
      url: "<?php echo base_url('Article/prosesCek'); ?>",
      data: {

        alias_url: linkprogram
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