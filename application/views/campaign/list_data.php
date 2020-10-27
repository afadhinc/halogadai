<?php
  $no=1;
  foreach ($dataCampaign->result() as $campaign) {
    $tamp=$campaign->images;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $campaign->tittle; ?></td>
      <td>
        <div class="break-word">
          
        
          <img class="profile-user-img img-responsive img-square" src="<?php
              if($tamp == ''){
              echo base_url('assets/img/not.png');
            }
            else
            {
              echo base_url('assets/frontend/img/campaign/'). $tamp;  

            }
           ?>" alt="User profile picture">
        </div>
      </td>
      <!-- <td><?php echo $campaign->images; ?></td> -->
      <td><?php echo $campaign->alias_url; ?></td>
      <td><?php echo $campaign->link_video; ?></td>  
      <td><?php echo $campaign->link_button; ?></td>
      <td><?php echo $campaign->nama_button; ?></td>  
      <td>
        <div class="break-word">
          <?php echo substr($campaign->body, 0,200); ?>...
        </div>
        
      </td>
      <td><?php echo $campaign->tgl_campaign; ?></td> 
      <td><?php echo $campaign->status_published; ?></td>
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>campaign/update/<?php echo $campaign->id_camapaign ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_camapaign" value="<?php echo $campaign->id_camapaign ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-campaign" data-id="<?php echo $campaign->id_camapaign; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>

      <!-- <td>
        <img class="profile-user-img img-responsive img-square" src="<?php
            if($tamp == ''){
          echo base_url('assets/img/not.png');}
          else
          {
            echo base_url(); ?>assets/img/ecommerce/<?php echo $tamp; 

          }
         ?>"  alt="User profile picture">
      </td> -->
    </tr>
    <?php
    $no++;
  }
?>
