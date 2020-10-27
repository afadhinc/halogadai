<?php
  $no=1;
  foreach ($dataTypeProduk->result() as $typeproduk) {
  
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $typeproduk->nama_type; ?></td>
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>TypeProduk/update/<?php echo $typeproduk->id_type_product ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_type_produk" value="<?php echo $typeproduk->id_type_product ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-typeproduk" data-id="<?php echo $typeproduk->id_type_product; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
