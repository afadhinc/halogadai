<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Tambah Data Sosmed</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>Sosmed/prosesTambah">
      
      <div class="box-body">
        <!-- Nama Sosmed -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Sosmed</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Sosmed" name="nama_sosmed" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Link Sosmed -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Link Sosmed</label>

          <div class="col-sm-10">
            <input type="text" id="validasi" class="form-control" placeholder="Link Sosmed" name="link_sosmed" aria-describedby="sizing-addon2">
          </div>
        </div>

        <!-- Gambar Sosmed -->
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Gambar Sosmed</label>

          <div class="col-sm-10">
            <input type="file" class="form-control" placeholder="Foto" name="gambar_sosmed" aria-describedby="sizing-addon2">
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
          <a href="<?php echo base_url() ?>Sosmed" class="form-control btn btn-danger">
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
      if (this.value.match(/[^0-9A-Za-z-\/.@:%_\/+~#=]/g)) {
          this.value = this.value.replace(/[^0-9A-Za-z-\/.@:%_\/+~#=]/g, '');
      }
        
        // console.log(this.value);
        
    });
  });
</script>