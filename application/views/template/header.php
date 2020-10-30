<style>
    .float {
        position: fixed;
        width: 40px;
        height: 40px;
        bottom: 40px;
        right: 25px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 25px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 9px;
    }


    .float2 {
        position: fixed;
        width: 40px;
        height: 40px;
        bottom: 90px;
        right: 25px;
        background-color: blue;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 25px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .navbar-toggler {
        height: 1.8em;
        width: 1.8em;
        padding: 0 0.45em 0.15em;
    }

    .navbar-toggler .line,
    .navbar-toggler .line::after,
    .navbar-toggler .line::before {
        width: 1rem;
        height: 0.16rem;
        background-color: black;
        display: block;
        position: absolute;
    }

    .navbar-toggler .line::after {
        content: "";
        display: block;
        top: -0.3em;
        -webkit-transition: 0.2s ease;
        transition: 0.2s ease;
    }

    .navbar-toggler .line::before {
        content: "";
        display: block;
        bottom: -0.3em;
        -webkit-transition: 0.2s ease;
        transition: 0.2s ease;
    }

    .navbar-toggler.open .line {
        -webkit-transition: 0.2s ease;
        transition: 0.2s ease;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .navbar-toggler.open .line::after {
        top: 0;
        opacity: 0;
    }

    .navbar-toggler.open .line::before {
        -webkit-transition: 0.2s ease;
        transition: 0.2s ease;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        bottom: 0;
    }

    /*# sourceMappingURL=test.css.map */
</style>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">HALOGADAI</a>
            <div class="waNav-mobile-display">
                <a href="https://wa.me/6282321760690?text=Hai,%20admin%20Halogadai%20saya%20mau%20tanya%20info%20Pinjaman"><img src="<?php echo base_url(); ?>/src/image/whatsapp-logo-png-2261.png" alt="" />
                    <span class="display-none">0823-2176-0690</span></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="burger">
                    <div class="line"></div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="ml-auto mr-auto navbar-nav">
                    <a class="nav-item nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?php echo base_url(); ?>home/ajukan">Ajukan Sekarang</a>
                    <a class="nav-item nav-link" href="<?php echo base_url(); ?>home/persyaratan">Persyaratan</a>
                    <a class="nav-item nav-link" href="<?php echo base_url(); ?>home/leasing">Leasing</a>
                    <a class="nav-item nav-link" href="<?php echo base_url(); ?>home/faq">FAQ</a>
                    <a class="nav-item nav-link" href="<?php echo base_url(); ?>home/blog">Blog</a>
                    <a class="nav-item nav-link" href="<?php echo base_url(); ?>home/disclaimer">Disclaimer</a>
                </div>
            </div>
            <div class="waNav-desktop-display">
                <a href="https://wa.me/6282321760690?text=Hai, admin Halogadai saya mau tanya info Pinjaman">
                    <img src="<?php echo base_url(); ?>/src/image/whatsapp-logo-png-2261.png" alt="" />
                    <span class="display-none">0823-2176-0690</span>
                </a>
            </div>
        </div>
    </nav>
</header>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
            document.getElementById("notelp").style.display = "none";
            document.getElementById("mbars").style.display = "none";
            document.getElementById("mclose").style.display = "block";
        } else {
            x.className = "topnav";
            document.getElementById("notelp").style = "block";
            document.getElementById("mbars").style.display = "block";
            document.getElementById("mclose").style.display = "none";
        }
    }

    function opsiwa() {

        location.href = "https://wa.me/6282321760690?text=Hai, admin Halogadai saya mau tanya info Pinjaman";

        /*Swal.fire({
        	  title: 'Hubungi kami',
        	  text: "Silahkan pilih media untuk menghubungi kami",
        	  type: 'warning',
        	  showCancelButton: true,
        	  confirmButtonColor: '#3085d6',
        	  cancelButtonColor: '#d33',
        	  confirmButtonText: 'Whatsapp' ,
        	  cancelButtonText: 'Telepon'
        	}).then((result) => {
        	  if (result.value) {
        		 location.href = "https://wa.me/6282321760690?text=Hai, admin Halogadai saya mau tanya info Pinjaman";
        	  }else{
        		  location.href = "tel:+6282321760690";
        	  }
        	});
        	*/
    }

    function opsisms() {


        location.href = "tel:+6282321760690";

    }
</script>
</script>


<a href="javascript:opsiwa()" class="float">
    <i class="fa fa-whatsapp my-float"></i>
</a>

<a href="javascript:opsisms()" class="float2">
    <i class="fa fa-phone my-float"></i>
</a>