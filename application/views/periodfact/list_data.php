<?php
  $no=1;
  foreach ($dataPeriodfact->result() as $periodfact) {
    $tamp=$periodfact->gambar;
    ?>
    <tr>
       
      <td><?php echo $no; ?></td>
      <td>
        <div class="break-word">
          <img class="profile-user-img img-responsive img-square" src="<?php
            if($tamp == ''){
              echo base_url('assets/img/not.png');
              // echo file_exists('assets/img/not.png');
            }
            else
            {
              echo $this->config->item('base_url'); ?>assets/frontend/img/imgfacts/<?php echo $tamp;
              
            }
           ?>" alt="User profile picture">
        </div>
      </td> 
      <td><?php echo $periodfact->judul; ?></td>
      <td>
        <div class="break-word">
          <?php echo $periodfact->deskripsi; ?>
        </div>
        
        
      </td>
      <td><?php echo $periodfact->sort; ?></td>
     
      
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>periodfact/update/<?php echo $periodfact->id_slider ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_slider" value="<?php echo $periodfact->id_slider ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-periodfact" data-id="<?php echo $periodfact->id_slider; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
