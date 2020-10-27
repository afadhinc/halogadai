<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Update Data Kategori Article</h3>

    <form method="POST" class="form-horizontal" action="<?php echo base_url() ?>KategoriArticle/prosesUpdate">
      <input type="hidden" name="id_menu" value="<?php echo $dataKategoriArticle->id_menu ?>">
      <div class="box-body">
        <!-- Tittle -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori Article</label>
          
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Kategori Article" name="nama_kategori_article" aria-describedby="sizing-addon2" value="<?php echo $dataKategoriArticle->nama_menu ?>">
          </div>
        </div>
        <!-- Nama Menu -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Parent</label>

          <div class="col-sm-10">
            <select name="parent" class="form-control select2"  aria-describedby="sizing-addon2">
              <?php
              foreach ($dataParent->result() as $parent) {
                ?>
                <option value="<?php echo $parent->id_menu; ?>" <?php if($parent->id_menu == $dataKategoriArticle->parent){echo "selected='selected'";} ?>><?php echo $parent->nama_menu; ?></option>
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
            <input type="text" class="form-control" placeholder="Url" name="url" aria-describedby="sizing-addon2" value="<?php echo $dataKategoriArticle->url ?>">
          </div>
        </div>
         <!-- Sort -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Sort</label>
          
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Sort" name="sort" aria-describedby="sizing-addon2" value="<?php echo $dataKategoriArticle->sort ?>">
          </div>
        </div>
         <!-- Status Published -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Status Published</label>

          <div class="col-sm-10">
            <input type="radio" name="status_published" value="1" <?php if($dataKategoriArticle->status_published == 1) echo 'checked="checked"'; ?>>Published

            <input type="radio" name="status_published" value="0" <?php if($dataKategoriArticle->status_published == 0) echo 'checked="checked"'; ?>>Not Published
            
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
