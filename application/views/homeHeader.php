	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
		<!--- HEAD -->
	    <?php $this->load->view('template/head'); ?>
	    <!--- CLOSE HEAD -->
		<body >	
			  <header id="header">
		  		<div class="header-top">
		  			<div class="container">
		  				<div class="row align-items-center justify-content-center margin">
				  			<div class="col-md-4 col-4 header-top-left">
				  				<div class="d-none d-sm-block"> 
				        		<a href="<?php echo base_url();?>Home/askDrLaurier"><img class="img-responsive drlaurier" src="<?php echo base_url()?>assets/frontend/img/dr_laurier.png" alt="" height="100px" title=""   /></a>	
				        		</div>	
				        		<div class="d-block d-md-none d-sm-block"> 
				        		<a href="<?php echo base_url();?>Home/askDrLaurier"><img class="img-responsive drlaurier" src="<?php echo base_url()?>assets/frontend/img/dr_laurier.png" alt="" height="80px" title=""   /></a>	
				        		</div>	
				  			</div>
				  			<div class="d-none d-sm-block">
					  			<div class="col-md-4 col-4 header-top-bottom no-padding">
					        		<a href="<?php echo base_url();?>Home"><img class="img-responsive" src="<?php echo base_url()?>assets/frontend/img/logo.png" alt="" height="140px" title=""  /></a>				
					  			</div> 
				  			</div>
				  			<div class="d-block d-md-none d-sm-block">
					  			<div class="col-md-4 col-4 header-top-bottom no-padding">
					        		<a href="<?php echo base_url();?>Home"><img class="img-responsive" src="<?php echo base_url()?>assets/frontend/img/logo.png" alt="" height="90px" title=""  /></a>				
					  			</div>
					  		</div>
				  			<div class="col-md-4 col-4 header-top-right no-padding">
				        			
				  			</div>				  							  			
				  		</div>  					
		  			</div>
				  	<?php $this->load->view($header); ?>	
				</div>
				<?php $this->load->view('template/menu'); ?>
			  </header><!-- #header -->		
			  
			<?php $this->load->view($content); ?>
			<!-- footer -->
			<?php $this->load->view('template/menu_footer') ?>
			<?php $this->load->view('template/footer') ?>
		</body>
	</html>