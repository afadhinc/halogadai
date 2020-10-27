<!--// MainBanner //-->
<div id="mainbanner">
  <div id="map_list"></div>
  <div class="kd-tourform">
	<div class="container">
	  <a href="#" class="formbtn">find the tour</a>
	  <form>
		<ul>
		  <li>
			<label>
			  <select>
				<option>France</option>
				<option>Germany</option>
				<option>London</option>
				<option>Cyprus</option>
			  </select>
			</label>
		  </li>
		  <li>
			<label>
			  <select>
				<option>00-00-2015</option>
				<option>06-03-2015</option>
				<option>11-05-2015</option>
			  </select>
			</label>
		  </li>
		  <li>
			<label>
			  <select>
			   <option>00-00-2015</option>
				<option>01-05-2015</option>
				<option>01-06-2016</option>
			  </select>
			</label>
		  </li>
		  <li>
			<label>
			  <select>
				<option>$ 1000</option>
				<option>$ 10000</option>
				<option>$ 20000</option>
				<option>$ 50000</option>
			  </select>
			</label>
		  </li>
		  <li><input type="submit" class="thbg-color" value="search now"></li>
		</ul>
	  </form>
	  </div>
  </div>

</div>
<!--// MainBanner //-->

<!--// Content //-->
<div class="kd-content">

  <!--// Page Section1 //-->
 <?php $this->load->view("page/home-didyouknow"); ?>
  <!--// Page Section1 //-->

  <!--// Page Section2 //-->
  <?php $this->load->view("page/home-explore"); ?>
  <!--// Page Section2 //-->

  <!--// Page Section3 //-->
  <?php $this->load->view("page/home-blog"); ?>
  <!--// Page Section3 //-->

  <!--// Page Section4 //-->
  <?php $this->load->view("page/home-organizer"); ?>
  <!--// Page Section4 //-->

  <!--// Page Section5-6 //-->
  <?php $this->load->view("page/home-gallery"); ?>
  <!--// Page Section5-6 //-->

  <!--// Page Section7 //-->
  <?php $this->load->view("page/home-counter"); ?>
  <!--// Page Section7 //-->

  <!--// Page Section8 //-->
  <?php $this->load->view("page/home-client"); ?>
  <!--// Page Section8 //-->

  <!--// Page Section9 //-->
  <?php $this->load->view("page/home-subscribe"); ?>
  <!--// Page Section9 //-->

</div>

<!--// Content //-->