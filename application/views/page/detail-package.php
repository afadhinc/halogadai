<!--// Content //-->
<div class="kd-content">

    <!-- <section class="pagesection" style=" background: url('<?php echo base_url(); ?>assets/img/product/<?php echo $datapackage->gambar_kategori ?>'); background-color: #ffffff; padding: 70px 0px 35px 0px; margin-bottom: 30px; margin-top: -30px; background-repeat: no-repeat;"> -->
    <!-- <section class="pagesection" style=" background: url('<?php echo base_url(); ?>extraimages/about-bg.jpg'); background-color: #ffffff; padding: 70px 0px 35px 0px; margin-bottom: 30px; margin-top: -30px;"> -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="kd-imageframe">
                    <div class="row">
                        <div class="col-md-5">
                            <img
                                src="<?php echo base_url() ?>assets/img/product/<?php echo $datapackage->gambar_kategori ?>">
                        </div>
                        <div class="col-md-7">
                            <h1><?php echo $datapackage->nama_product; ?></h1>
                            <p><?php echo $datapackage->body; ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </section>




    <!--// Page Section7 //-->
    <?php //$this->load->view("page/home-counter"); ?>
    <!--// Page Section7 //-->

    <!--// Page Section8 //-->
    <?php //$this->load->view("page/home-client"); ?>
    <!--// Page Section8 //-->

</div>
<!--// Content //-->