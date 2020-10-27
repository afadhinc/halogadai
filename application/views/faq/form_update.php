<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Update Data FAQ</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>Faq/prosesUpdate">
      <input type="hidden" name="id_faq" value="<?php echo $dataFaq->id_faq ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Type" name="judul" aria-describedby="sizing-addon2" value="<?php echo $dataFaq->judul ?>">
          </div>
        </div>

        <!-- Body -->
        <!-- /.box-header -->
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Body</label>
          <div class="col-sm-10">
                <textarea id="editor1" name="body" rows="10" cols="80" placeholder="Isi Body">
                  <?php echo $dataFaq->body ?>
                </textarea>
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
          <a href="<?php echo base_url() ?>Faq" class="form-control btn btn-danger">
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

      filebrowserImageUploadUrl : '<?php echo base_url(); ?>Faq/upload?type=image&path=faq'
    })
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>