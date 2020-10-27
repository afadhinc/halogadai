    <link rel="stylesheet" href="<?php echo base_url(); ?>/src/custom/css/persyaratan.css" />


   <header>
   <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Persyaratan</h1>
        </div>
      </div>
    </header>

    <main style="margin-top: 0px">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h4 class="title-persyaratan mt-5 mb-4 ">Persyaratan Pinjaman Dana Gadai BPKB Mobil / Motor</h4>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-10">
          <?php foreach ($dataAboutUs->result() as $about) {?>
                      <h1><?php echo $about->judul ?></h1>
                      <p><?php echo $about->body ?></p>

                      <?php }?>
          </div>
        </div>
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
