<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Update Data Trending Article</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>Article/prosesUpdateSortTrending">
      <input type="hidden" name="id_article" value="<?php echo $dataArticle->id_article ?>">
      <input type="hidden" name="id_user" value="<?php echo $dataArticle->id_user ?>">
      <div class="box-body">
        <!-- Tittle -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tittle</label>
          
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Tittle" name="title" aria-describedby="sizing-addon2" value="<?php echo $dataArticle->title ?>" readonly>
          </div>
        </div>
      </div>
        <!-- Tittle -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Sort Trend</label>
          
          <div class="col-sm-10">
            <input type="number" class="form-control" placeholder="Sort" name="sort_trending" aria-describedby="sizing-addon2" value="<?php echo $dataArticle->sort_trending ?>">
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

