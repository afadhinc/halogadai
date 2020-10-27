<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Detail Data User</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>User/prosesUpdate">
      <input type="hidden" name="id_user" value="<?php echo $dataUser->id_user ?>">
      <div class="box-body">
        <!-- Username -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

          <div class="col-sm-10">
            <?php echo $dataUser->username; ?>
          </div>
        </div>

        <!-- Password -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Password</label>

          <div class="col-sm-10">
            <?php echo $dataUser->password; ?>
          </div>
        </div>

        <!-- Nama -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

          <div class="col-sm-10">
            <?php echo $dataUser->nama; ?>
          </div>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

          <div class="col-sm-10">
            <?php echo $dataUser->email; ?>
          </div>
        </div>

        <!-- Tanggal Lahir -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>

          <div class="col-sm-10">
            <?php echo $dataUser->tanggal_lahir; ?>
          </div>
        </div>

        <!-- Foto -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Foto</label>

          <div class="col-sm-10">
            
            <?php echo $dataUser->foto; ?>
          </div>
        </div>

        <!-- Alamat -->
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
              <?php echo $dataUser->alamat; ?>
          </div>
        </div>

        <!-- Domisili -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Domisili</label>

          <div class="col-sm-10">
            <?php echo $dataUser->domisili; ?>
          </div>
        </div>

        <!-- Kota -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Kota</label>

          <div class="col-sm-10">
            <?php echo $dataUser->kota ?>
          </div>
        </div>

        <!-- Kodepos -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Kodepos</label>

          <div class="col-sm-10">
            
            <?php echo $dataUser->kodepos; ?>
          </div>
        </div>

        <!-- Telephone -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Telephone</label>

          <div class="col-sm-10">
            
            <?php echo $dataUser->telephone; ?>
          </div>
        </div>

        <!-- Handphone -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Handphone</label>

          <div class="col-sm-10">
            
            <?php echo $dataUser->handphone; ?>
          </div>
        </div>

        <!-- Pekerjaan -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan</label>

          <div class="col-sm-10">
            
            <?php echo $dataUser->pekerjaan; ?>
          </div>
        </div>

        <!-- Status -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Status</label>

          <div class="col-sm-10">
            <?php echo $dataUser->status; ?>
          </div>
        </div>


      </div>

      <div class="form-group">        
        <div class="col-md-4">
          <a href="<?php echo base_url() ?>User" class="form-control btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i> Kembali
          </a>
        </div>
    
      </div>
    </form>
    
  </div>
</div>
