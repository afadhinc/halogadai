<div class="content-wrapper">
  <div class=" col-md-12 well">
    <div class="form-msg"></div>
    <h3 style="display:block; text-align:center;">Tambah Data Pengajuan</h3>

    <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() ?>Pengajuan/prosesTambah">
      
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="" name="nama" aria-describedby="sizing-addon2">
          </div>
        </div>

		 <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nomor HP</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="" name="hp" aria-describedby="sizing-addon2">
          </div>
        </div>
		
		 <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="" name="email" aria-describedby="sizing-addon2">
          </div>
        </div>
		
		 <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

          <div class="col-sm-10">
			<textarea name="alamat"class="form-control" ></textarea>
             
          </div>
        </div>
		
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Merk</label>

          <div class="col-sm-10">
		  <select name="id_merk" class="form-control">
			<option value="">Pilih Merk</option>
			<?php $data = $this->db->query("select * from tbl_merk");
					foreach($data->result() as $par){?>
					<option value="<?php echo $par->id_merk?>"><?php echo $par->merk?></option>
					<?php } ?>
		  </select>
            
          </div>
        </div>
		
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tipe</label>

          <div class="col-sm-10">
		  <select name="id_tipe" class="form-control">
			<option value="">Pilih Tipe</option>
			<?php $data = $this->db->query("select * from tbl_tipe");
					foreach($data->result() as $par){?>
					<option value="<?php echo $par->id_tipe?>"><?php echo $par->tipe?></option>
					<?php } ?>
		  </select>
            
          </div>
        </div>
		
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>

          <div class="col-sm-10">
            <input type="number" class="form-control" placeholder="" name="tahun" aria-describedby="sizing-addon2">
          </div>
        </div>
		
		
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nilai Pinjaman</label>

          <div class="col-sm-10">
            <input type="number" class="form-control" placeholder="" name="nilai_pinjaman" aria-describedby="sizing-addon2">
          </div>
        </div>
		
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tenor (bulan)</label>

          <div class="col-sm-10">
            <input type="number" class="form-control" placeholder="" name="tenor" aria-describedby="sizing-addon2">
          </div>
        </div>
		
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">bpkb</label>

          <div class="col-sm-10">
		  <select name="bpkb" class="form-control">
			<option value="">Pilih BPKB</option>
			 <option value="Sendiri/Pasangan">Sendiri/Pasangan</option>
			  <option value="Orang lain (belum balik nama)">Orang lain (belum balik nama)</option>
		  </select>
            
          </div>
        </div>
		
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Leasing</label>

          <div class="col-sm-10">
		  <select name="id_leasing" class="form-control">
			<option value="">Pilih Leasing</option>
			<?php $data = $this->db->query("select * from  tbl_kategori_product order by nama_kategori asc");
					foreach($data->result() as $par){?>
					<option value="<?php echo $par->id_kategori_product?>"><?php echo $par->nama_kategori?></option>
					<?php } ?>
		  </select>
            
          </div>
        </div>

      </div>

      <div class="form-group">
        <div class="col-md-3">
          
        </div>

        <div class="col-md-3">
            <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
        </div>
        
        <div class="col-md-3">
          <a href="<?php echo base_url() ?>Pengajuan" class="form-control btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i> Kembali
          </a>
        </div>

        <div class="col-md-3">
          
        </div>
    
      </div>
    </form>
    
  </div>
</div>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1',{
      // filebrowserUploadUrl: '<?php echo base_url() ?>Quiz/upload?type=Files&CKEditorFuncNum=2',
      // extraPlugins: 'uploadwidget,uploadimage,filebrowser'

      filebrowserImageUploadUrl : '<?php echo base_url(); ?>Pengajuan/upload?type=image&path=pengajuan'
    })
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>