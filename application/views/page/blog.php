
	<link rel="stylesheet" href="<?php echo base_url(); ?>/src/custom/css/blog.css" />

	<header>
	<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Blog</h1>
        </div>
      </div>
</header>

	<main style="margin-top: 0px">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h4 class="title-blog mt-5 mb-5">Our Lates Blog</h4>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10 col-11 col-sm-11 card-blog-top">
            <div class="autoplay">
			<?php foreach ($datablog->result() as $blog) {
    $tamp = $blog->images;
    ?>
			<div class="row justify-content-center">
                <div class="col-md-12 col-12 col-sm-12">
                  <div class="card">
                    <img
                      class="card-img-top"
                      src="<?php echo base_url(); ?>assets/frontend/img/imgMenstruasi/<?php echo $tamp ?>"
                      alt="Card image cap" style="min-height: 255px"
                    />
                    <div class="card-body">
                      <p><?php echo strftime(" %d %B %Y", strtotime($blog->tgl_article)) ?></p>
                      <h5 class="card-title">
					  <a href="<?php echo base_url() ?>Home/detailBlog/<?php echo $blog->alias_url ?>"><?php echo $blog->title ?></a>
                      </h5>
                      <p class="card-text">
					  <?php echo substr($blog->body, 0, 150) ?>...
                      </p>
                    </div>
                  </div>
                </div>
              </div>
			<?php }?>
            </div>
          </div>
        </div>
        <!-- <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row autoplay">
              <div class="col-md-12 col-md-12 col-sm-12 mt-3">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="<?php echo base_url(); ?>/src/image/servis-motor-pasca-mudik.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <p>Motor Yamaha</p>
                    <h5 class="card-title">
                      Tips supaya performa motor tetap maksimal
                    </h5>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Qui tempore maiores quod modi praesentium saepe atque
                      delectus itaque vero temporibus.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-md-12 col-sm-12 mt-3">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="<?php echo base_url(); ?>/src/image/servis-mudik-setelah-mudik.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <p>Mobil</p>
                    <h5 class="card-title">
                      Perlukah servis mudik sebelum mudik ?
                    </h5>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Aliquam natus deserunt consectetur in ipsa officiis
                      adipisci repellat corrupti possimus nostrum.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-md-12 col-sm-12 mt-3">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="<?php echo base_url(); ?>/src/image/servis-motor-pasca-mudik.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <p>Motor Yamaha</p>
                    <h5 class="card-title">
                      Tips supaya performa motor tetap maksimal
                    </h5>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Qui tempore maiores quod modi praesentium saepe atque
                      delectus itaque vero temporibus.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-md-12 col-sm-12 mt-3">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="<?php echo base_url(); ?>/src/image/servis-mudik-setelah-mudik.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <p>Mobil</p>
                    <h5 class="card-title">
                      Perlukah servis mudik sebelum mudik ?
                    </h5>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Aliquam natus deserunt consectetur in ipsa officiis
                      adipisci repellat corrupti possimus nostrum.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="row mt-3">
          <div class="col-md-12">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" href="#">All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mobil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Motor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Elektronik & Furniture</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Berita lainnya</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-9">
            <div class="row justify-content-center card-blog">

			<?php foreach ($datablog->result() as $blog) {
    $tamp = $blog->images;
    ?>

              <div class="col-md-6 col-lg-4 mt-3">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="<?php echo base_url(); ?>assets/frontend/img/imgMenstruasi/<?php echo $tamp ?>"
					alt="Card image cap"
					style="min-height: 138px;"
                  />
                  <div class="card-body">
                    <p><?php echo strftime(" %d %B %Y", strtotime($blog->tgl_article)) ?></p>
                    <h5 class="card-title"><a href="<?php echo base_url() ?>Home/detailBlog/<?php echo $blog->alias_url ?>"><?php echo $blog->title ?></a></h5>
                    <p class="card-text p-description">
					<?php echo substr($blog->body, 0, 150) ?>...
                    </p>
                  </div>
                </div>
              </div>

			  <?php }?>

			</div>
          </div>
        </div>
      </div>
    </main>
