
  <section class="kd-pagesection" style=" padding: 50px 0px 20px 0px; ">
	<div class="container">
	  <div class="row">

		<div class="col-md-12">
		  <div class="kd-section-title"><h3>our latest blogs</h3></div>
		  <div class="kd-blog-list kd-blogmedium">
			<?php foreach ($datablog->result() as $blog){ 
				$tamp=$blog->images;
			?>
			<div class="row">
			  <div class="col-md-12">
				<div class="bloginner">
				  <figure><a href="#"><img src="<?php echo base_url(); ?>assets/frontend/img/imgMenstruasi/<?php echo $tamp ?>" alt=""></a>
					<figcaption><a href="#" class="fa fa-plus-circle"></a></figcaption>
				  </figure>
				  <div class="kd-bloginfo">
					<h2><a href="<?php echo base_url()?>Home/detailBlog/<?php echo $blog->alias_url ?>"><?php echo $blog->title ?></a></h2>
					<ul class="kd-postoption">
					  <li><a href="#" class="thcolorhover">News </a></li>
					  <li><time datetime="2008-02-14 20:00">| <?php echo strftime(" %d %B %Y",strtotime($blog->tgl_article)) ?></time></li>
					</ul>
					<p class="break-word"><?php echo substr($blog->body, 0,150) ?>...</p>

					<div class="kd-usernetwork">
					  <ul class="kd-blogcomment">
						<li><a href="#" class="thcolorhover"><i class="fa fa-comments-o"></i> 15</a></li>
						<li><a href="#" class="thcolorhover"><i class="fa fa-heart-o"></i> 456</a></li>
					  </ul>
					  <div class="kd-social-network">
						<ul>
						  <li><a href="#" class="thcolorhover"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="#" class="thcolorhover"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="#" class="thcolorhover"><i class="fa fa-tumblr"></i></a></li>
						  <li><a href="#" class="thcolorhover"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  

			</div>
			<?php } ?>
		  </div>
		</div>

		  

	  </div>
	</div>
  </section>
  