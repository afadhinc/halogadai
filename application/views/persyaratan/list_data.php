<?php
  $no=1;
  foreach ($dataPersyaratan->result() as $persyaratan) {
  
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $persyaratan->judul; ?></td>
      <td>
        <div class="break-word">
          <?php echo substr($persyaratan->body, 0,50) ?>..
        </div>
        
      </td>
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>Persyaratan/update/<?php echo $persyaratan->id_persyaratan ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_persyaratan" value="<?php echo $persyaratan->id_persyaratan ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-persyaratan" data-id="<?php echo $persyaratan->id_persyaratan; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
