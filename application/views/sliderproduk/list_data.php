<?php
  $no=1;
  foreach ($dataSliderProduk->result() as $slider) {
    $tamp=$slider->gambar;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $slider->nama_product; ?></td>
      <td>
        <img class="profile-user-img img-responsive img-square" src="<?php
            if($tamp == ''){
          echo base_url('assets/img/not.png');
          // echo file_exists('assets/img/not.png');
        }
          else
          {
            echo $this->config->item('base_url'); ?>assets/frontend/img/product/<?php echo $tamp;
            
          }
         ?>" alt="User profile picture">
      </td> 
      <td><?php echo $slider->deskripsi; ?></td>
      >
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>SliderProduk/update/<?php echo $slider->id_slider ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_slider" value="<?php echo $slider->id_slider ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-sliderproduk" data-id="<?php echo $slider->id_slider; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>

          <a href="<?php echo base_url('DeskripsiProduk/tampil/'.$slider->id_slider); ?>" ><button class="btn btn-info detail-dataDeskripsiProduk"  data-id="<?php echo $slider->id_slider; ?>"><i class="glyphicon glyphicon-info-sign"></i> Deskripsi Produk </button></a>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
