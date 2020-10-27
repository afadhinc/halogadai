<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("template/head"); ?>
</head>
  <body>
    
    <?php $this->load->view("template/header"); ?>
    
	<?php $this->load->view($content); ?>
	
    <?php $this->load->view("template/footer"); ?>
	<?php $this->load->view("template/copyright"); ?>
	<?php $this->load->view("template/foot"); ?>
  </body>
</html>