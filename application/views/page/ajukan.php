 <?php $id = rand(1000, 9999);?>
     <link rel="stylesheet" href="<?php echo base_url(); ?>/src/custom/css/ajukan-sekarang.css" />


 <header>
 <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Formulir Pengajuan</h1>
        </div>
	  </div>
</header>

<main style="margin-top: 0px">
 <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-12">
            <div class="form-title">
              Isi Form dibawah ini atau Hubung Kami di
              <span
                ><img src="<?php echo base_url(); ?>/src/image/whatsapp-logo-png-2261.png" alt="" />
                082321760690</span
              >
            </div>
            <p class="form-description">
              Kami akan segera memproses pengajuan Anda secepatnya setelah Anda
              mengisi data dibawah ini:
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url() ?>Home/prosesTambah">
              <div class="form-group">
                <label for="fullName">Nama Lengkap</label>
                <input
                  type="text"
                  class="form-control"
                  id="fullName"
                  aria-describedby="fullName"
                  name="nama" required
                />
              </div>
              <div class="form-group">
                <label for="noWA">HP (WhatsApp)</label>
                <input
                  type="text"
                  class="form-control"
                  id="noWA"
                  required name="hp"
                  aria-describedby="noWA"
                  maxlength="13"
                />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  required
                  aria-describedby="email"
                />
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="merekKendaraan">Merek Kendaraan</label>
                <input
                  type="text"
                  class="form-control"
                  id="merekKendaraan"
                  name="id_merk"
                  aria-describedby="merekKendaraan"
                  placeholder="Contoh: Avanza, Xenia"
                  required
                />
              </div>
              <div class="form-group">
                <label for="tipeKendaraan">Tipe Kendaraan</label>
                <input
                  type="text"
                  class="form-control"
                  id="tipeKendaraan"
                  aria-describedby="tipeKendaraan"
                  placeholder="Contoh: G, Matic"
                  name="id_tipe"
                  required
                />
              </div>
              <div class="form-group">
                <label for="tahunKendaraan">Tahun Kendaraan</label>
                <input
                  type="number"
                  class="form-control"
                  id="tahunKendaraan"
                  aria-describedby="tahunKendaraan"
                  placeholder="Contoh: 2018"
                  min="1900" max="2050" name="tahun" id="tahun"   required
                />
              </div>
              <div class="form-group">
                <label for="nilaiPinjaman">Nilai Pinjaman</label>
                <input
                  type="number"
                  class="form-control"
                  name="nilai_pinjaman" id="currency-field"  pattern="^\Rp\d{1,3}(,\d{3})*(\.\d+)?Rp " value="" data-type="currency" placeholder="Rp"
                />
              </div>
              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="danaMaksimal"
                  value="dana_maksimal"
                  onchange="doalert(this)"
                />
                <label class="form-check-label" for="danaMaksimal"
                  >Dana Maksimal</label
                >
              </div>
              <div class="form-group">
                <label for="tenor">Tenor</label>
                <select class="custom-select" id="inputGroupSelect04">
                  <option value="">Pilih Tenor</option>
                  <option value="6 Bulan">6 Bulan</value>
                    <option value="12 Bulan">12 Bulan</value>
                    <option value="18 Bulan">18 Bulan</value>
                    <option value="24 Bulan">24 Bulan</value>
                    <option value="36 Bulan">36 Bulan</value>
                </select>
              </div>
              <div class="form-group">
                <label for="tenor">BPKB atas nama</label>
                <select class="custom-select" id="inputGroupSelect04" name="bpkb" required>
                  <option value="">Pilih BPKB</option>
								 <option value="Sendiri/Pasangan">Sendiri/Pasangan</option>
								  <option value="Orang lain (belum balik nama)">Orang lain (belum balik nama)</option>
                </select>
              </div>
              <div class="form-group">
                <label for="tenor">Leasing</label>
                <select class="custom-select" name="id_leasing">
                  <option value="">Pilih Leasing</option>
								<?php $data = $this->db->query("select * from  tbl_kategori_product order by nama_kategori asc");
foreach ($data->result() as $par) {?>
										<option value="<?php echo $par->id_kategori_product ?>"><?php echo $par->nama_kategori ?></option>
										<?php }?>
								<option value="999">Pilihkan yang Terbaik</option>
                </select>
              </div>
              <div class="row justify-content-center text-center mt-5">
                <div class="col-md-1">
                  <button type="submit" class="btn btn-primary">
                    Kirim Pengajuan
                  </button>
                </div>
              </div>
            </form>
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

<script>

	let name = document.getElementById('tahun');

	name.addEventListener('keyup', () => {
		if (name.value.length > 4) {
			name.value = name.value.slice(0, 4);
		}
	})

	let hp = document.getElementById('hp');

	hp.addEventListener('keyup', () => {
		if (hp.value.length > 13) {
			hp.value = hp.value.slice(0, 13);
		}
	})

	function doalert(checkboxElem) {
	  if (checkboxElem.checked) {
		document.getElementById("currency-field").value = "Dana Maksimal";
		document.getElementById("currency-field").disabled = true;
	  } else {
		document.getElementById("currency-field").value = "";
		document.getElementById("currency-field").disabled = false;
	  }
	}
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




<?php if (isset($_GET['msg']) && isset($_GET['id'])) {
    $idx = $_GET['id'];
    ?>
Swal.fire(
  'Berhasil',
  'Terima kasih, berikut order ID Anda: <?php echo $idx ?>.<br>Kami akan segera menghubungi Anda untuk memproses pengajuan Pinjaman Anda',
  'success'
)
<?php }?>
</script>