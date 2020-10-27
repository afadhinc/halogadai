

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       &nbsp;
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
          <div class="box">
            <section class="content-header">
              <h1>
                Data Article Trending
              </h1>
            </section>
              <div class="msgsort" style="display:none;">
                <?php echo @$this->session->flashdata('msgsort'); ?>
              </div>
          <!-- /.box -->
            <div class="box-body table-responsive">
              <table id="list-data-trending" class="table table-hover js-basic-example dataTable table-custom table-striped table-bordered nowrap dataTable dtr-inline">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Images</th>
                    <th>Nama Kategori Article</th>
                    <th>Sort</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="data-article-trending">

                </tbody>
              </table>
            </div>
          </div>


          <div class="box">
            <section class="content-header">
              <h1>
                Data Article
              </h1>
            </section>
            <div class="box-header">
              <div class="col-md-2">
                <a href="<?php echo base_url() ?>Article/tambah">
                  <button class="form-control btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
                </a>
              </div>
              <div class="col-md-2">
                <a href="<?php echo base_url() ?>Article/spreadsheet">
                  <button class="form-control btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Export Data Lama</button>
                </a>
              </div>
              <div class="msg" style="display:none;">
                <?php echo @$this->session->flashdata('msg'); ?>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="list-data" class="table table-hover js-basic-example dataTable table-custom table-striped table-bordered nowrap dataTable dtr-inline">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Images</th>
                    <th>Alias Url</th>
                    <th>Status Published</th>
                    <th>Body</th>
                    <!-- <th>Status Promoted</th> -->
                    <th>Tanggal Article</th>
                    <th>Tags</th>
                    <th>Nama Kategori Article</th>
                    <!-- <th>Nama Kategori Article</th> -->
                    <th>Email User</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="data-article">

                </tbody>
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

