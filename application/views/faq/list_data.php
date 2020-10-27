<?php
  $no=1;
  foreach ($dataFaq->result() as $faq) {
  
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $faq->judul; ?></td>
      <td>
        <div class="break-word">
          <?php echo substr($faq->body, 0,50) ?>..
        </div>
        
      </td>
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>Faq/update/<?php echo $faq->id_faq ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_faq" value="<?php echo $faq->id_faq ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-faq" data-id="<?php echo $faq->id_faq; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
