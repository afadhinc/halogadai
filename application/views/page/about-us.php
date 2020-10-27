
    <!--// Sub Header //-->
    <div class="kd-subheader">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="subheader-info">
              <h1>Disclaimer</h1>
              <!-- <p>Morbi euismod euismod consectetur. Donec pharetra, lacus at convallis maximus, arcu quam accumsan diam, et aliquam odio elit gravida mi</p> -->
            </div>
            <div class="kd-breadcrumb">
              <ul>
                <li><a href="#">Home</a></li> 
                <li><a href="#">Disclaimer</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--// Sub Header //-->

    <!--// Content //-->
    <div class="kd-content">

      <section class="pagesection" style=" background: url('<?php echo base_url(); ?>extraimages/about-bg.jpg'); background-color: #ffffff; padding: 70px 0px 35px 0px; margin-bottom: 30px; margin-top: -30px;">
          <div class="container">
            <div class="row">  
              <div class="col-md-12">
                <div class="kd-imageframe">
                  <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-7">
                      <?php foreach ($dataAboutUs->result() as $about){ ?>
                      <h1><?php echo $about->judul ?></h1>
                      <p><?php echo $about->body ?></p>
                       
                      <?php } ?>
                    
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
      </section>

      


  <!--// Page Section7 //-->
  <?php $this->load->view("page/home-counter"); ?>
  <!--// Page Section7 //-->

  <!--// Page Section8 //-->
  <?php //$this->load->view("page/home-client"); ?>
  <!--// Page Section8 //-->

    </div>
    <!--// Content //-->
