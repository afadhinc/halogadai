<?php
  $no=1;
  foreach ($dataKategoriArticle->result() as $kategoriarticle) {
    
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td>
        <?php $tamp=$kategoriarticle->parent; 
        $data= $this->M_kategoriarticle->select_all2($tamp)->row();
        echo $data->nama_menu2;
        ?>
      </td>
      <td><?php echo $kategoriarticle->nama_menu; ?></td>
       <td><?php echo $kategoriarticle->url; ?></td>
      <td><?php echo $kategoriarticle->sort; ?></td>
      <td><?php echo $kategoriarticle->status_published=='1'?'Aktif':'Tidak Aktif'; ?></td>
      
      <td class="text-center">
        <a href="<?php echo base_url() ?>KategoriArticle/update/<?php echo $kategoriarticle->id_menu ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_menu" value="<?php echo $kategoriarticle->id_menu ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-kategoriarticle" data-id="<?php echo $kategoriarticle->id_menu; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
