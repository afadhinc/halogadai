<link rel="stylesheet" href="<?php echo base_url(); ?>/src/custom/css/leasing.css" />

<header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Leasing</h1>
        </div>
    </div>
</header>

<main style="margin-top: 0px">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h4 class="title-persyaratan mt-5 mb-4">Daftar Leasing</h4>
                <p class="mb-5">
                    Berikut ini beberapa leasing/Perusahaan Multifinance yang menjadi
                    mitra Halogadai :
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">

                    <?php foreach ($data->result() as $leasing) {
    $tamp = $leasing->gambar_kategori;
    ?>

                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="card-leasing">
                            <div class="image-partner-leasing">
                                <img src="<?php echo base_url(); ?>assets/img/product/<?php echo $tamp ?>" alt="" />
                            </div>
                            <!-- <div class="corporate-partner-leasing">
                    <h5><?php echo $leasing->nama_kategori ?></h5>
                  </div> -->
                            <div class="alamat-corporate-partner-leasing">
                                <?php echo $leasing->body ?>
                            </div>
                        </div>
                    </div>
                    <?php }?>



                </div>
            </div>
        </div>
    </div>
</main>