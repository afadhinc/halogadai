<?php
  $no=1;
  foreach ($dataSosmed->result() as $sosmed) {
    $tamp=$sosmed->gambar_sosmed;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $sosmed->nama_sosmed; ?></td>
      <td><?php echo $sosmed->link_sosmed; ?></td>
      <td>
        <img class="profile-user-img img-responsive img-square" src="<?php
            if($tamp == ''){
          echo base_url('assets/img/not.png');}
          else
          {
            echo $this->config->item('base_url'); ?>assets/frontend/img/sosmed/<?php echo $tamp; 

          }
         ?>" alt="User profile picture">
      </td>
      
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>sosmed/update/<?php echo $sosmed->id_sosmed ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_sosmed" value="<?php echo $sosmed->id_sosmed ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-sosmed" data-id="<?php echo $sosmed->id_sosmed; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
