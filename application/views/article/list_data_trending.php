

<?php
  $no=1;
  foreach ($dataArticleTrending->result() as $article) {
    $tamp=$article->images;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td>
        <div class="break-word"> 
          <?php echo $article->title; ?>
        </div>
      </td>
      <td>
        <img class="profile-user-img img-responsive img-square" src="<?php
          if($tamp == ''){
            echo base_url('assets/img/not.png');
          }
          else
          {
            echo $this->config->item('base_url') ?>assets/frontend/img/imgMenstruasi/<?php echo $tamp; 

          }
         ?>" alt="User profile picture">
      </td>
      <td><?php echo $article->nama_menu; ?></td>
      <td><?php echo $article->sort_trending; ?></td>
      <td class="text-center" style="min-width:270px;">
        <?php if($article->trending=='1'){ ?>
          <a href="javascript:;" onclick="notrend(<?php echo $article->id_article; ?>)" class="btn btn-danger" title="Trending"> Delete</a>
        <?php }else{ ?>
          <a href="javascript:;" onclick="trend(<?php echo $article->id_article; ?>)" class="btn btn-primary" title="Trending"> Trending</a>
        <?php } ?>
    

        <a href="<?php echo base_url() ?>Article/updatesorttrend/<?php echo $article->id_article ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_article" value="<?php echo $article->id_article ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
       
         

          
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
