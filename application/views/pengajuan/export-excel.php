<?php
 // nama file
 $filename="data pengajuan-".date('Ymd').".xls";

 //header info for browser
header("Content-Type: application/vnd-ms-excel"); 
header('Content-Disposition: attachment; filename="' . $filename . '";');
?>
<table id="list-data" class="table table-hover js-basic-example dataTable table-custom table-striped table-bordered nowrap dataTable dtr-inline">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>HP</th>
		<th>Email</th>
		<th>Alamat</th>
		<th>Merk</th>
		<th>Tipe</th>
		<th>Tahun</th>
		<th>Nilai Pinjaman</th>
		<th>Tenor</th>
		<th>BPKB</th>
		<th>Leasing</th>
         
      </tr>
    </thead>
 <tbody  >
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
       
      
    </tr>
    <?php
    $no++;
  }
?>
</tbody>
</table>