<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Tambah Data Kategori Article</h3>

    <form method="POST" class="form-horizontal" action="<?php echo base_url() ?>KategoriArticle/prosesTambah">
      
      <div class="box-body">
         <!-- Tittle -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori Article</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Kategori Article" name="nama_kategori_article" aria-describedby="sizing-addon2">
          </div>
        </div>
        <!-- parent -->
        <div class="form-group">

          <label for="inputEmail3" class="col-sm-2 control-label">parent</label>

          <div class="col-sm-10">
            <select name="parent" class="form-control " aria-describedby="sizing-addon2">
              <option disabled selected="">Nama Parent</option>
               <option value="0">No Parent</option>
              <?php
              foreach ($dataParent->result() as $parent) {
                ?>
                <option value="<?php echo $parent->id_menu; ?>">
                  <?php echo $parent->nama_menu; ?>
                </option>
                <?php
              }
              ?>
            </select>
          </div>
        </div>

       
        <!-- url -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Url</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="cotoh:Home/sample" name="url" aria-describedby="sizing-addon2">
          </div>
        </div>
        <!-- sort -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Sort</label>

          <div class="col-sm-10">
            <input type="number" class="form-control" placeholder="Sort" name="sort" aria-describedby="sizing-addon2">
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
         <input type="hidden" class="form-control" name="quiz_in" value="1">


      </div>

      <div class="form-group">
        <div class="col-md-3">
          
        </div>
        <div class="col-md-3">
            <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
        </div>
        
        <div class="col-md-3">
          <a href="<?php echo base_url() ?>KategoriArticle" class="form-control btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i> Kembali
          </a>
        </div>

        <div class="col-md-3">
          
        </div>
    
      </div>
    </form>
    
  </div>
</div>
