<?php
//print_r($dataslider->result());
?>
<!--// MainBanner //-->
<!--<div id="mainbanner">
  <ul class="bxslider">
  	<?php foreach ($dataslider->result() as $slider) {
    $tamp = $slider->gambar;
    ?>
  		<li>
			<img src="<?php echo base_url(); ?>assets/frontend/img/imgfacts/<?php echo $tamp ?>" alt="" />
		</li>
  	<?php }?>

  </ul>


</div>-->

<!--// MainBanner //-->

<!--// Content //-->
<main>

    <!--// Page Section1 //-->
    <?php $this->load->view("page/home-didyouknow");?>
    <!--// Page Section1 //-->



    <!--// Page Section3 //-->
    <?php $this->load->view("page/home-blog");?>
    <!--// Page Section3 //-->

    <!--// Page Section2 //-->
    <?php $this->load->view("page/home-explore");?>
    <!--// Page Section2 //-->

    <!--// Page Section4 //-->
    <?php $this->load->view("page/home-organizer");?>
    <!--// Page Section4 //-->



</main>

<!--// Content //-->