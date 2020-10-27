<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <?php $tamp = $data_adminNumRows->foto; ?>
      
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $this->config->item('base_url'); ?>/assets/img/user/<?php echo $tamp; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $data_adminNumRows->nama ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      
        <?php 

      $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri_segments = explode('/', $uri_path);
      $tmp = '';
      if (isset($uri_segments[1])) {
        $tmp = $uri_segments[1];
      }
    ?>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- <li class="active"> -->
        <?php if ($this->session->userdata('id_roles') == 1 || $this->session->userdata('id_roles') == 3) {
        ?> 

        <li class="<?php echo $tmp == 'Cms'?'active':'' ?>">
          <a href="<?php echo base_url() ?>Cms/Home">
            <i class="fa fa-dashboard"></i> <span>Dashboard </span>
          </a>
        </li>
        <?php } ?>

     
        <?php if ($this->session->userdata('id_roles') == 1) {
        ?>
		
		 <li class="<?php echo $tmp == 'Pengajuan'?'active':'' ?>">
		  <a href="<?php echo base_url() ?>Pengajuan">
			<i class="fa fa-table"></i><span>Daftar Pengajuan</span>
		  </a>
		</li>
       
	   
	   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li class="<?php echo $tmp == 'Article'?'active':'' ?>">
              <a href="<?php echo base_url() ?>Article">
                <i class="fa fa-newspaper-o"></i> <span>Blog</span>
              </a>
            </li>

            <li class="<?php echo $tmp == 'KategoriArticle'?'active':'' ?>">
              <a href="<?php echo base_url() ?>KategoriArticle">
                <i class="fa fa-newspaper-o"></i> <span>Kategori Blog</span>
              </a>
            </li>
          </ul>
        </li>

      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Main Content</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li class="<?php echo $tmp == 'Periodfact'?'active':'' ?>">
              <a href="<?php echo base_url() ?>Periodfact ">
                <i class="fa fa-newspaper-o"></i> <span>Slider</span>
              </a>
            </li>
			<li class="<?php echo $tmp == 'Faq'?'active':'' ?>">
			  <a href="<?php echo base_url() ?>Faq/update/1">
				<i class="fa fa-pencil"></i><span>FAQ</span>
			  </a>
			</li>
			<li class="<?php echo $tmp == 'Faq'?'active':'' ?>">
			  <a href="<?php echo base_url() ?>Faqhome">
				<i class="fa fa-pencil"></i><span>FAQ Home</span>
			  </a>
			</li>
			 <li class="<?php echo $tmp == 'AboutUs'?'active':'' ?>">
			  <a href="<?php echo base_url() ?>AboutUs/update/2">
				<i class="fa fa-pencil"></i><span>Disclaimer</span>
			  </a>
			</li>
			
			  <li class="<?php echo $tmp == 'Persyaratan'?'active':'' ?>">
			  <a href="<?php echo base_url() ?>Persyaratan/update/1">
				<i class="fa fa-pencil"></i><span>Persyaratan</span>
			  </a>
			</li>
			
			  
          </ul>
        </li>

		

        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Leasing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li class="<?php echo $tmp == 'KategoriProduk'?'active':'' ?>">
              <a href="<?php echo base_url() ?>KategoriProduk">
                <i class="fa fa-newspaper-o"></i> <span>Daftar Leasing</span> 
              </a>
            </li>

            <li class="<?php echo $tmp == 'TypeProduk'?'active':'' ?>">
              <a href="<?php echo base_url() ?>TypeProduk">
                <i class="fa fa-newspaper-o"></i> <span>Type Leasing</span> 
              </a>
            </li>

            <li class="<?php echo $tmp == 'Produk'?'active':'' ?>">
              <a href="<?php echo base_url() ?>Produk">
                <i class="fa fa-newspaper-o"></i> <span>Produk Leasing</span> 
              </a>
            </li>

          
          </ul>
        </li>
 
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
			
			<!--<li class="<?php echo $tmp == 'User'?'active':'' ?>">-->
			<!--  <a href="<?php echo base_url() ?>User"> -->
			<!--	<i class="fa fa-user"></i><span>User</span>        -->
			<!--  </a>-->
			<!--</li>-->
            <li class="<?php echo $tmp == 'Sosmed'?'active':'' ?>">
              <a href="<?php echo base_url() ?>Sosmed">
                <i class="fa fa-facebook"></i> <span>Sosmed</span>
              </a>
            </li>
          </ul>
        </li>

        

        <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
