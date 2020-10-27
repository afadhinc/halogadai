
    <link rel="stylesheet" href="<?php echo base_url(); ?>/src/custom/css/disclaimer.css" />

<header>
<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Disclaimer</h1>
        </div>
      </div>
</header>
    <main style="margin-top: 0px">
      <div class="container">
      <?php foreach ($dataAboutUs->result() as $about) {?>
        <div class="row text-center justify-content-center">
          <div class="col-md-10 col-sm-12 col-12">
            <p><?php echo $about->body ?></p>
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
