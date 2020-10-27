<!--// Sub Header //-->
<div class="kd-subheader">
  <div class="container">
	<div class="row">
	  <div class="col-md-12">

		<div class="subheader-info">
		  <h1>Package List</h1>
		  <!-- <p>Morbi euismod euismod consectetur. Donec pharetra, lacus at convallis maximus, arcu quam accumsan diam, et aliquam odio elit gravida mi</p> -->
		</div>
		<div class="kd-breadcrumb">
		  <ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Our Team</a></li>
		  </ul>
		</div>

	  </div>
	</div>
  </div>
</div>
<!--// Sub Header //-->

<!--// Content //-->
<div class="kd-content">

  <!--// Page Section //-->
  <section class="kd-pagesection" style=" padding: 0px 0px 10px 0px; ">
	<div class="container">
	  <div class="row">

		<div class="col-md-12">
		  <div class="kd-package-list">
			
			<div class="row">
			<?php foreach ($dataproduk->result() as $produk){ 
				$tamp=$produk->gambar_kategori;
			?>
			  <article class="col-md-4">
				<figure><a href="#"><img src="<?php echo base_url(); ?>assets/img/product/<?php echo $tamp ?>" alt=""></a>
				  <figcaption>
					<span class="package-price thbg-color">Rp.1.500.000</span>
					<div class="kd-bottomelement">
					  <h5><a href="<?php echo base_url()?>Home/detailCatalog/<?php echo  $produk->url_kategori ?>"><?php echo $produk->nama_product; ?></a></h5>
					  <div class="days-counter"><span>15</span> <br> hari</div>
					</div>
				  </figcaption>
				</figure>
			  </article>
			  
			  <?php } ?>
			</div>
			
			<div class="pagination-wrap">
			  <div class="pagination">
				<a href="#"><i class="fa fa-angle-double-left"></i></a>
				<span>1</span>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#"><i class="fa fa-angle-double-right"></i></a>
			  </div>
			</div>
		  </div>
		</div>

	  </div>
	</div>
  </section>
  <!--// Page Section //-->

</div>
<!--// Content //-->