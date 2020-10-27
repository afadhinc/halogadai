<?php
  $no=1;
  foreach ($dataPengajuan->result() as $pengajuan) {
  
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $pengajuan->nama; ?></td>
	  <td><?php echo $pengajuan->hp; ?></td>
	  <td><?php echo $pengajuan->email; ?></td>
	  <td><?php echo $pengajuan->alamat; ?></td>
	  <td><?php echo $pengajuan->merk; ?></td>
	  <td><?php echo $pengajuan->tipe; ?></td>
	  <td><?php echo $pengajuan->tahun; ?></td>
	  <td><?php echo $pengajuan->nilai_pinjaman; ?></td>
	  <td><?php echo $pengajuan->tenor; ?></td>
	  <td><?php echo $pengajuan->bpkb; ?></td>
	  <td><?php echo $pengajuan->leasing; ?></td>
       
      <td class="text-center" style="min-width:270px;">
        <a href="<?php echo base_url() ?>Pengajuan/update/<?php echo $pengajuan->id_pengajuan ?>">

          <button class="btn btn-warning">
            <input type="hidden" name="id_pengajuan" value="<?php echo $pengajuan->id_pengajuan ?>">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>
        
          <button class="btn btn-danger konfirmasiHapus-pengajuan" data-id="<?php echo $pengajuan->id_pengajuan; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        
      </td>
    </tr>
    <?php
    $no++;
  }
?>
