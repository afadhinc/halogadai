<link rel="stylesheet" href="<?php echo base_url(); ?>/src/custom/css/faq.css" />


<header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">FAQ</h1>
        </div>
    </div>
</header>

<main style="margin-top: 0px;" class="pt-5 pb-5">
    <div class="container">
        <?php foreach ($dataAboutUs->result() as $about) {?>


        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php echo $about->body ?>
            </div>
        </div>


        <?php }?>


    </div>
</main>




<!--// Page Section7 //-->
<?php $this->load->view("page/home-counter");?>
<!--// Page Section7 //-->

<!--// Page Section8 //-->
<?php //$this->load->view("page/home-client"); ?>
<!--// Page Section8 //-->

</div>
<!--// Content //-->