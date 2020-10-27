

  <section id="hitungform">
	<div class="container">


  <div class="row justify-content-center">
          <div class="col-md-8 col-sm-12">
            <h6 class="text-center mb-5 mt-3 second-title-section">
              Kami akan bantu Pilihkan yang Terbaik Untuk Anda
            </h6>
            <div class="card-home">
              <h4 class="text-center mb-5">
                Ayo Hitung, Bandingkan & Pilih Leasingnya
              </h4>
              <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12">
                  <form>
                    <div class="row">
                      <div class="col-6">
                        <h6 class="">Pilih Jaminan</h6>
                      </div>
                      <div class="col-3">
                        <div class="card-input-home">
                          <label>
                            <input type="radio" name="radio" id="radio2" />
                            <img
                              src="<?php echo base_url() ?>/src/image/Motor Black.png "
                              class="img-fluid"
                              alt=""
                            />
                          </label>
                        </div>
                        <p>BPKB Motor</p>
                      </div>
                      <div class="col-3">
                        <div class="card-input-home">
                          <label>
                            <input type="radio" name="radio" id="radio1" checked />
                            <img
                              src="<?php echo base_url() ?>/src/image/Mobil Black.png"
                              class="img-fluid"
                              alt=""
                            />
                          </label>
                        </div>
                        <p>BPKB Mobil /Truk</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Butuh Dana</label>
                      <input
                      type="text" class="form-control" name="dana" id="currency-field" pattern="^\Rp\d{1,3}(,\d{3})*(\.\d+)?Rp " value="" data-type="currency" placeholder="Rp" required
                      />
                    </div>
                    <div class="form-group">
                      <label>Jangka Waktu</label>
                      <select class="form-control" id="tenor" name="tenor">
                        <option selected>Pilih Tenor</option>
                        <option value="6 Bulan">6 Bulan</value>
							<option value="12 Bulan">12 Bulan</value>
							<option value="18 Bulan">18 Bulan</value>
							<option value="24 Bulan">24 Bulan</value>
							<option value="36 Bulan">36 Bulan</value>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="leasingPilihan">Leasing</label>
                      <select class="form-control" id="leasing" name="leasing">
                        <option selected>Pilih Leasing</option>
                        <?php
$idx = 1;
$data = $this->db->query("select * from tbl_kategori_product");
foreach ($data->result() as $par) {
    ?>
								<option value="<?php echo $par->nama_kategori ?>"><?php echo $par->nama_kategori ?></value>
							  <?php }?>
							  <option value="Bandingkan Semua">Bandingkan Semua</option>
                      </select>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-12 pt-4">
                        <a href="javascript:hitung()" class="btn btn-custom" style="color: black">
                          Hitung Sekarang
</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>


  <script>

	// Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() {
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.

  // get input value
  var input_val = input.val();

  // don't validate empty input
  if (input_val === "") { return; }

  // original length
  var original_len = input_val.length;

  // initial caret position
  var caret_pos = input.prop("selectionStart");

  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);

    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }

    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "Rp " + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "Rp " + input_val;

    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }

  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}


</script>



  <script type="text/javascript">
    function hitung(){



		var dana = document.getElementById("currency-field").value;
		var tenor = document.getElementById("tenor").value;
		var leasing = document.getElementById("leasing").value;
		var tipe = "";

		if(dana ==="" || tenor === "" || leasing === ""){
			Swal.fire(
			  'Perhatian',
			  'Silahkan mengisi data terlebih dahulu',
			  'failed'
			)
		}
		else{
			if (document.getElementById('radio1').checked) {
				 tipe = "BPKB MOBIL/TRUK";
			}else{
				tipe = "BPKB MOTOR";
			}



			Swal.fire({
				  title: 'Segera Dihitung',
				  text: "Kami akan menginfokan nilai angsuran via Whatsapp.",
				  icon: 'success',
				  showCancelButton: false,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Ok'
				}).then((result) => {
				  if (result.value) {
					 location.href = "https://wa.me/6282321760690?text=Halo Admin, tolong info  Hitungan Pinjaman berikut ini: \n\n*Pilih jaminan* : "+tipe+"\n *Butuh Dana* :"+dana+"\n Tenor :"+tenor+"\n *Leasing* :"+leasing;
				  }
				});

		}
    };



</script>