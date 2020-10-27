<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Tambah Data Campaign</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>Campaign/prosesTambah">
      
      <div class="box-body">
        <!-- Nama Ecommerce -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Title Campaign</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Title" name="tittle" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Images -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Images Campaign</label>

          <div class="col-sm-10">
            <input type="file" class="form-control" placeholder="Images Campaign" name="images" aria-describedby="sizing-addon2">
            
          </div>
        </div>

        <!-- Body Campaign -->        
          
          <!-- /.box-header -->
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Body</label>
            <div class="col-sm-10">
                  <textarea id="editor1" name="body" rows="10" cols="80" placeholder="Isi Body"></textarea>
            </div>
          </div>

        <!-- Alias URL -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Alias URL</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Alias URL" id="validasi" name="alias_url" aria-describedby="sizing-addon2" autocomplete="off">
            <span id="pesan"></span>
          </div>
        </div>

        <!-- Status Published -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Status Published</label>

          <div class="col-sm-10">
            <input type="radio" name="status_published" value="1" >Published
            <input type="radio" name="status_published" value="0" >Not Published
            
          </div>
        </div>

        <!-- Tanggal Campaign-->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Campaign</label>

          <div class="col-sm-10">
            <input type="date" class="form-control" placeholder="Tanggal Campaign" name="tgl_campaign" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Link Video -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Link Video</label>

          <div class="col-sm-10">
            <input type="text" class="form-control validasi1" placeholder="Link Video" name="link_video" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Link Button -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Link Button</label>

          <div class="col-sm-10">
            <input type="text" class="form-control validasi1" placeholder="Link Video" name="link_button" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Nama Button -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Button</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Video" name="nama_button" aria-describedby="sizing-addon2">
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
          <a href="<?php echo base_url() ?>Campaign" class="form-control btn btn-danger">
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

      filebrowserImageUploadUrl : '<?php echo base_url(); ?>Campaign/upload?type=image&path=campaign'
    })
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<script type="text/javascript">
  $(document).ready(function(){
  $('#validasi').keyup(function() {
      if (this.value.match(/[^a-z-0-9_]/g)) {
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
      url: "<?php echo base_url('Campaign/prosesCek'); ?>",
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


<script type="text/javascript">
  $(document).ready(function(){
  $('.validasi1').keyup(function() {
      if (this.value.match(/[^0-9A-Za-z-\/.@:%_\/+~#=]/g)) {
          this.value = this.value.replace(/[^0-9A-Za-z-\/.@:%_\/+~#=]/g, '');
      }
        
        // console.log(this.value);
        
    });
  });
</script>