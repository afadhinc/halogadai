<?php
  $no=1;
  foreach ($dataProduk->result() as $produk) {
    $tamp=$produk->gambar_kategori;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $produk->nama_product; ?></td>
      <td><?php echo $produk->nama_kategori; ?></td>
      <td>
        <img class="profile-user-img img-responsive img-square" src="<?php
            if($tamp == ''){
          echo base_url('assets/img/not.png');
          // echo file_exists('assets/img/not.png');
        }
          else
          {
            echo $this->config->item('base_url'); ?>assets/img/product/<?php echo $tamp;
            
          }
         ?>" alt="User profile picture">
      </td> 
      <td><?php echo $produk->url_kategori; ?></td>
      <td><?php echo $produk->nama_type; ?></td>
      <td>
        <div class="break-word">
          <?php echo substr($produk->body, 0,50) ?>..
        </div>
        
      </td>
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>Produk/update/<?php echo $produk->id_product ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_produk" value="<?php echo $produk->id_product ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-produk" data-id="<?php echo $produk->id_product; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
          
          <a href="<?php echo base_url('SliderProduk/tampil/'.$produk->id_product); ?>" ><button class="btn btn-info detail-dataSliderProduk"  data-id="<?php echo $produk->id_product; ?>"><i class="glyphicon glyphicon-info-sign"></i> Slider Produk </button></a>

      </td>
    </tr>
    <?php
    $no++;
  }
?>
