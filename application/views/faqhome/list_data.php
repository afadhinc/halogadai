<?php
  $no=1;
  foreach ($dataFaqhome->result() as $faqhome) {
    
    ?>
    <tr>
      <td><?php echo $no; ?></td>
       
      <td><?php echo $faqhome->judul; ?></td>
       <td><?php echo $faqhome->deskripsi; ?></td> 
      
      <td class="text-center">
        <a href="<?php echo base_url() ?>Faqhome/update/<?php echo $faqhome->id ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_menu" value="<?php echo $faqhome->id ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-faqhome" data-id="<?php echo $faqhome->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
