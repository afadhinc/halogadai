<?php $this->load->view('head') ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php 
    $data=array();
    $iduser=array('id_user'=>$this->session->userdata('id_users'));
    $data['data_adminNumRows'] =$this->M_admin->data_adminNumRows($iduser);
    $this->load->view('header',$data) ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php 
  $data=array();
  $iduser=array('id_user'=>$this->session->userdata('id_users'));
  $data['data_adminNumRows'] =$this->M_admin->data_adminNumRows($iduser);
  $this->load->view('menu',$data) ?>

  <!-- Content Wrapper. Contains page content -->
  <?php $this->load->view('footer'); ?>
  <?php $data = array('content' => $content); ?>
  <?php $this->load->view($content,$data) ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div> -->
    <strong>Copyright &copy; 2020 <a href="<?php echo base_url() ?>Home/home">halogadai.com</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->






</body>
</html>
