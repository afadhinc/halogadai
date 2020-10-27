<?php
  $no=1;
  foreach ($dataAboutUs->result() as $about) {
  
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $about->judul; ?></td>
      <td>
        <div class="break-word">
          <?php echo substr($about->body, 0,50) ?>..
        </div>
        
      </td>
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>AboutUs/update/<?php echo $about->id_about ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_about" value="<?php echo $about->id_about ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-aboutus" data-id="<?php echo $about->id_about; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
