

<?php
  $no=1;
  foreach ($dataArticle->result() as $article) {
    $tamp=$article->images;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td>
        <div class="break-word"> 
          <?php echo $article->title; ?>
        </div>
        
          
      </td>
      <!-- <td><?php echo $tamp; ?></td> -->
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
      
      <td>
        <div class="break-word">
          <?php echo $article->alias_url; ?>
        </div>
      </td>
      <td>
        <?php 
          if ($article->status_published == '1') {
            echo "Published";
          }else{
            echo "Not Published";
          }
        ?>
          
      </td>
      <td>
        <div class="break-word">
          <?php echo substr($article->body, 0,50) ?>..
        </div>
        
      </td>
      <!-- <td>
        <?php 
          // if ($article->status_promoted == '1') {
          //   echo "Promoted";
          // }else{
          //   echo "Not Promoted";
          // }
        ?>
      </td> -->
      <td><?php echo $article->tgl_article; ?></td>
      <td><?php echo $article->tags; ?></td>
      <td><?php echo $article->nama_menu; ?></td>
      <!-- <td><?php echo $article->nama_kategori_article; ?></td> -->
      <td><?php echo $article->email; ?></td>
      
      <td class="text-center" style="min-width:270px;">
        <?php if( $article->status_published=='1' ){ ?>
           <?php if($article->trending=='1' and $article->status_published=='1' ){ ?>
                <a href="javascript:;" onclick="notrend(<?php echo $article->id_article; ?>)" class="btn btn-primary" title="Trending"> No Trending</a>
              <?php }else{ ?>
                <a href="javascript:;" onclick="trend(<?php echo $article->id_article; ?>)" class="btn btn-primary" title="Trending"> Trending</a>
            <?php } ?>
          <?php } ?>
    

        <a href="<?php echo base_url() ?>Article/update/<?php echo $article->id_article ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_article" value="<?php echo $article->id_article ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-article" data-id="<?php echo $article->id_article; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
          <?php if ($article->tags == 'quiz'): ?>
            <a href="<?php echo base_url('QuizSoal/tampil/'.$article->id_article); ?>" ><button class="btn btn-info detail-dataQuiz"  data-id="<?php echo $article->id_article; ?>"><i class="glyphicon glyphicon-info-sign"></i> Quiz Soal </button></a>
          <?php endif ?>

          
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
