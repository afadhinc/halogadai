<?php
  $no=1;
  foreach ($dataKategoriProduk->result() as $kategoriproduk) {
    $tamp=$kategoriproduk->gambar_kategori;
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $kategoriproduk->nama_kategori; ?></td>
      <td><?php echo $kategoriproduk->url_kategori; ?></td>
      <td>
       <img class="profile-user-img img-responsive img-square" src="<?php
            if($tamp == ''){
          echo base_url('assets/img/not.png');
        }
          else
          {
            echo base_url('assets/img/product/'). $tamp; 
            
          }
         ?>" alt="User profile picture"> 
      </td> 
      <td><?php echo $kategoriproduk->body; ?></td>
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>KategoriProduk/update/<?php echo $kategoriproduk->id_kategori_product ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_kategori_product" value="<?php echo $kategoriproduk->id_kategori_product ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-kategoriproduk" data-id="<?php echo $kategoriproduk->id_kategori_product; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
