<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Tambah Data Article</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>Article/prosesTambah">
      <input type="hidden" name="id_user" value="<?php echo $dataUser ?>">
      <div class="box-body" id="dynamic_field">
        <!-- Tittle -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tittle</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Tittle" name="title" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Nama Menu -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori</label>

          <div class="col-sm-10">
            <select name="id_menu" class="form-control " aria-describedby="sizing-addon2">
              <option disabled selected="">Nama Kategori</option>
              <?php
              foreach ($dataMenu->result() as $menu) {
                ?>
                <option value="<?php echo $menu->id_menu; ?>">
                  <?php echo $menu->nama_menu; ?>
                </option>
                <?php
              }
              ?>
            </select>
          </div>
        </div>

        <!-- Nama Kategori Article -->
        <!-- <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori Article</label>

          <div class="col-sm-10">
            <select name="id_kategori_article" class="form-control " aria-describedby="sizing-addon2">
              <option disabled selected="">Nama Kategori Article</option>
              <?php
              foreach ($dataKategoriArticle->result() as $kategori) {
                ?>
                <option value="<?php echo $kategori->id_kategori_article; ?>">
                  <?php echo $kategori->nama_kategori_article; ?>
                </option>
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
            <input type="file" class="form-control" placeholder="Foto" name="images" aria-describedby="sizing-addon2">
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
        

        <!-- Alias Url -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Alias Url</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Alias Url" id="validasi" name="alias_url" aria-describedby="sizing-addon2" autocomplete="off">
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

        <!-- Status Promoted -->
        <!-- <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Status Promoted</label>

          <div class="col-sm-10">
            <input type="radio" name="status_promoted" value="1" >Promoted
            <input type="radio" name="status_promoted" value="0" >Not Promoted
          </div>
        </div> -->

        <!-- Tanggal Article-->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Article</label>

          <div class="col-sm-10">
            <input type="datetime" class="form-control" placeholder="Tanggal Article" name="tgl_article" id="datetimepicker_unixtime" autocomplete="off" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Tags -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tags</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Tags" name="tags" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Meta Keyword -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Meta Keyword</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Meta Keyword" name="meta_keyword" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Meta Description -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Meta Description</label>

          <div class="col-sm-10">
            <!-- <input type="text" class="form-control" placeholder="Meta Description" name="meta_description" aria-describedby="sizing-addon2"> -->
            <textarea class="form-control" name="meta_description" cols="50"></textarea>
          </div>
        </div>

        <!-- Meta Title -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Meta Title</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Meta Title" name="meta_title" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Meta Image -->
        <!-- <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Meta Image</label>

          <div class="col-sm-10">
            <input type="file" class="form-control" placeholder="Meta Image" name="meta_image" aria-describedby="sizing-addon2">
          </div>
        </div> -->

        <!-- Answer -->
        <!-- <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Answer A</label>

          <div class="col-sm-10">
            <textarea id="editor2" name="hasilA" rows="10" cols="80" placeholder="Hasil A"></textarea>
          </div>
        </div> -->

        <!-- Answer -->
        <!-- <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Answer B</label>

          <div class="col-sm-10">
            <textarea id="editor3" name="hasilB" rows="10" cols="80" placeholder="Hasil B"></textarea>
          </div>
        </div> -->

        <!-- Quiz -->
        <!-- <div class="form-group" >
          <label for="inputEmail3" class="col-sm-2 control-label">Quiz</label>

          <div class="col-sm-9" >
            <input type="text" class="form-control name_list" placeholder="Quiz" name="quiz[]" aria-describedby="sizing-addon2">
           
            
          </div>
          <div class="col-sm-1">
            <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
          </div>
          <label for="inputEmail3" class="col-sm-2 control-label">Opsi 1</label>
            <div class="col-sm-9" >
              
              <input type="text" class="form-control name_list" placeholder="Opsi 1" name="opsi1[]" aria-describedby="sizing-addon2">
              
            </div>
            <div class="col-sm-1"></div>
          <label for="inputEmail3" class="col-sm-2 control-label">Opsi 2</label>
            <div class="col-sm-9" >
              
              <input type="text" class="form-control name_list" placeholder="Opsi 2" name="opsi2[]" aria-describedby="sizing-addon2">
              
            </div>
            <div class="col-sm-1"></div>
        </div> -->


      </div>

      <div class="form-group">
        <div class="col-md-3">
          
        </div>
        
        <div class="col-md-3">
            <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
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

<script type="text/javascript">
  jQuery('#datetimepicker_unixtime').datetimepicker({
    format:'Y-m-d H:i:s'
  });
  
</script>

<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<div class="form-group" id="row'+i+'"><td>'+
            '<label for="inputEmail3" class="col-sm-2 control-label">Quiz</label>'+
             '<div class="col-sm-9 " >'+
                '<input type="text" id="q'+i+'" class="form-control name_list" placeholder="Quiz" name="quiz[]" aria-describedby="sizing-addon2">'+
              '</div>'+

            '<label for="inputEmail3" class="col-sm-2 control-label">Opsi 1</label>'+
            '<div class="col-sm-9 ">'+
              '<input type="text" id="o1'+i+'" class="form-control name_list" placeholder="Opsi1" name="opsi1[]" aria-describedby="sizing-addon2">'+
            '</div>'+
            
            '<label for="inputEmail3" class="col-sm-2 control-label">Opsi 2</label>'+
            '<div class="col-sm-9 ">'+
              '<input type="text" id="o2'+i+'" class="form-control name_list" placeholder="Opsi2" name="opsi2[]" aria-describedby="sizing-addon2">'+
            '</div>'+

            '<div class="col-sm-1">'+
              '<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>'+
            '</div>'+
            '</div>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });
 });  
 </script>