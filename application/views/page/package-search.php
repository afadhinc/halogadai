<section class="kd-pagesection" style=" padding: 50px 0px 20px 0px; ">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="kd-bookingtab">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i
                                    class="fa fa-building"></i></a></li>
                        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i
                                    class="fa fa-bus"></i></a></li>
                        <li><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i
                                    class="fa fa-plane"></i></a></li>
                        <li><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i
                                    class="fa fa-building-o"></i></a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="kd-booking-list">
                                <h2>Book hotel</h2>
                                <ul>
                                    <li><i class="fa fa-check-circle"></i> No.1 for booking in our surroundings</li>
                                    <li><i class="fa fa-check-circle"></i> No hidden costs</li>
                                    <li><i class="fa fa-check-circle"></i> Attractive offers with price advantage</li>
                                </ul>
                            </div>
                            <div class="kd-bookingform">
                                <form class="kd-datepicker">
                                    <ul>
                                        <li>
                                            <label>Destination</label>
                                            <input type="text" placeholder="Enter place / regions">
                                        </li>
                                        <li>
                                            <label>Arrival</label>
                                            <div class="input-group input-append date" id="datePicker">
                                                <input type="text" class="form-control" name="date" />
                                                <span class="input-group-addon add-on"><span
                                                        class="fa fa-calendar"></span></span>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Departure</label>
                                            <div class="input-group input-append date" id="datePickerone">
                                                <input type="text" class="form-control" name="date" />
                                                <span class="input-group-addon add-on"><span
                                                        class="fa fa-calendar"></span></span>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                                <form class="kd-tourform" action="<?php echo base_url() ?>home/package_search"
                                    method="post">
                                    <ul>
                                        <li>
                                            <span>Rooms</span>
                                            <label>
                                                <select>
                                                    <option>1 room</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                </select>
                                            </label>
                                        </li>
                                        <li>
                                            <span>per room</span>
                                            <label>
                                                <select>
                                                    <option>3 adults</option>
                                                    <option>3 adults</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                </select>
                                            </label>
                                        </li>
                                        <li>
                                            <span></span>
                                            <label>
                                                <select>
                                                    <option>5 childrens</option>
                                                    <option>5 childrens</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                </select>
                                            </label>
                                        </li>
                                        <li>

                                            <input type="submit" value="search now" class="thbg-color">

                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="kd-booking-list">
                                <h2>Book hotel</h2>
                                <ul>
                                    <li><i class="fa fa-check-circle"></i> No.1 for booking in our surroundings</li>
                                    <li><i class="fa fa-check-circle"></i> No hidden costs</li>
                                    <li><i class="fa fa-check-circle"></i> Attractive offers with price advantage</li>
                                </ul>
                            </div>
                            <div class="kd-bookingform">
                                <form class="kd-tourform" action="<?php echo base_url() ?>home/package_search"
                                    method="post">
                                    <ul>
                                        <li>
                                            <span>Rooms</span>
                                            <label>
                                                <select>
                                                    <option>1 room</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                </select>
                                            </label>
                                        </li>
                                        <li>
                                            <span>per room</span>
                                            <label>
                                                <select>
                                                    <option>3 adults</option>
                                                    <option>3 adults</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                </select>
                                            </label>
                                        </li>
                                        <li>
                                            <span></span>
                                            <label>
                                                <select>
                                                    <option>5 childrens</option>
                                                    <option>5 childrens</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                </select>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="submit" value="search now" class="thbg-color">
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <div class="kd-booking-list">
                                <h2>Book hotel</h2>
                                <ul>
                                    <li><i class="fa fa-check-circle"></i> No.1 for booking in our surroundings</li>
                                    <li><i class="fa fa-check-circle"></i> No hidden costs</li>
                                    <li><i class="fa fa-check-circle"></i> Attractive offers with price advantage</li>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <div class="kd-booking-list">
                                <h2>Book hotel</h2>
                                <ul>
                                    <li><i class="fa fa-check-circle"></i> No.1 for booking in our surroundings</li>
                                    <li><i class="fa fa-check-circle"></i> No hidden costs</li>
                                    <li><i class="fa fa-check-circle"></i> Attractive offers with price advantage</li>
                                </ul>
                            </div>
                            <div class="kd-bookingform">
                                <form class="kd-tourform" action="<?php echo base_url() ?>home/package_search"
                                    method="post">
                                    <ul>
                                        <li>
                                            <span>Rooms</span>
                                            <label>
                                                <select>
                                                    <option>1 room</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                </select>
                                            </label>
                                        </li>
                                        <li>
                                            <span>per room</span>
                                            <label>
                                                <select>
                                                    <option>3 adults</option>
                                                    <option>3 adults</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                </select>
                                            </label>
                                        </li>
                                        <li>
                                            <span></span>
                                            <label>
                                                <select>
                                                    <option>5 childrens</option>
                                                    <option>5 childrens</option>
                                                    <option>Your destination</option>
                                                    <option>Your destination</option>
                                                </select>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="submit" value="search now" class="thbg-color">
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-8">
                <div class="kd-section-title">
                    <h3>Package List</h3>
                </div>
                <div class="kd-blog-list kd-blogmedium">
                    <?php foreach ($dataproduk->result() as $produk){ 
				$tamp=$produk->gambar_kategori;
			?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bloginner">
                                <figure><a href="#"><img
                                            src="<?php echo base_url(); ?>assets/img/product/<?php echo $tamp ?>"
                                            alt=""></a>
                                    <figcaption><a href="#" class="fa fa-plus-circle"></a></figcaption>
                                </figure>
                                <div class="kd-bloginfo">
                                    <h2><a
                                            href="<?php echo base_url()?>Home/detailCatalog/<?php echo  $produk->url_kategori ?>"><?php echo $produk->nama_product ?></a>
                                    </h2>
                                    <ul class="kd-postoption">
                                        <!-- <li><a href="#" class="thcolorhover">News </a></li> -->
                                        <!-- <li><time datetime="2008-02-14 20:00">| <?php //echo strftime(" %d %B %Y",strtotime($produk->produk)) ?></time></li> -->
                                    </ul>
                                    <p class="break-word"><?php echo substr($produk->body, 0,180) ?>...</p>

                                    <div class="kd-usernetwork">
                                        <ul class="kd-blogcomment">
                                            <li>Rp.1.500.000 </li>
                                            <li>| </li>
                                            <li>15 Hari</li>
                                            <!-- <li><a href="#" class="thcolorhover"><i class="fa fa-heart-o"></i> 456</a></li> -->
                                        </ul>
                                        <div class="kd-social-network">
                                            <ul>
                                                <li><a href="#" class="thcolorhover"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="#" class="thcolorhover"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li><a href="#" class="thcolorhover"><i class="fa fa-tumblr"></i></a>
                                                </li>
                                                <li><a href="#" class="thcolorhover"><i
                                                            class="fa fa-google-plus"></i></a></li>
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