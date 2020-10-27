

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <div class="msg" style="display:none;">
                <?php echo @$this->session->flashdata('msg'); ?>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <!-- <table id="list-data-user" class="table table-hover js-basic-example dataTable table-custom table-striped table-bordered nowrap dataTable dtr-inline"> -->
                <table id="list-data-user" class="table table-hover table-custom table-striped table-bordered nowrap"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Lahir</th>
                    <th>Foto</th>
                    <th>Alamat</th>
                    <th>Domisili</th>
                    <th>Kota</th>
                    <th>Kode Pos</th>
                    <th>Telephone</th>
                    <th>Handphone</th>
                    <th>Pekerjaan</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th>Login Form</th>
                    <th>Action</th>
                  </tr>
                </thead>
               <!--  <tbody id="data-user">
                  
                </tbody> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php $this->load->view($content.'/ajax'); ?>

<!-- <script type="text/javascript">
  $('#list-data').DataTable( {
    responsive: true
  } );
</script> -->