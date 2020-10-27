<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Update Data Sosmed</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>Sosmed/prosesUpdate">
      <input type="hidden" name="id_sosmed" value="<?php echo $dataSosmed->id_sosmed ?>">
      <div class="box-body">
        <!-- Nama sosmed -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Sosmed</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama sosmed" name="nama_sosmed" aria-describedby="sizing-addon2" value="<?php echo $dataSosmed->nama_sosmed ?>">
          </div>
        </div>

        <!-- Link Sosmed -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Link Sosmed</label>

          <div class="col-sm-10">
            <input type="text" id="validasi" class="form-control" placeholder="Link Sosmed" id="validasi" name="link_sosmed" aria-describedby="sizing-addon2" value="<?php echo $dataSosmed->link_sosmed ?>">
            <span id="pesan"></span>
          </div>
        </div>

        <!-- Foto Sosmed -->
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Gambar Sosmed</label>

          <div class="col-sm-10">
            <input type="file" class="form-control" placeholder="Foto" name="gambar_sosmed" aria-describedby="sizing-addon2" value="<?php echo $dataSosmed->gambar_sosmed ?>">
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
      if (this.value.match(/[^0-9A-Za-z-\/.@:%_.\/+~#=]/g)) {
          this.value = this.value.replace(/[^0-9A-Za-z-\/.@:%_.\/+~#=]/g, '');
      }
        
        // console.log(this.value);
        
    });
  });
</script>