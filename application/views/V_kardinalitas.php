<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BASIS DATA E-LEARNING</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v2.2.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Kardinalitas</h2>
          <p>Terdapat banyak kegiatan yang terjadi di Supermarket, yaitu antara pembeli dan kasir, pembeli dan barang, dan supplier dan barang. Kegiatan yang terdapat pada gambar di bawah ini terjadi untuk per satu harinya. Maka, dari contoh gambar di bawah ini, pilih dan tariklah Kardinalitas yang memungkinkan dari contoh gambar tersebut sesuai dengan nomor masing-masing!</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
              <h3>Supermarket</h3>
              <img src="/skripsidini/assets/img/kardinalitas1.png" class="img-fluid" alt="" data-aos="zoom-in">
              <br>
              <img src="/skripsidini/assets/img/kardinalitas2.png" class="img-fluid" alt="" data-aos="zoom-in">
              <br>
              <img src="/skripsidini/assets/img/kardinalitas3.png" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" >
            <form action="<?php echo base_url();?>index.php/C_siswa/kardinalitas1" method="post">
              <div class="box" data-aos="zoom-in" data-aos-delay="100"style = "height: 100%">
              <h3>Drop Here</h3>
                <div id="target-container" class="box list m-2" style = "background-color: #ccc; height: 8rem">1</div>
                <div id="target-container" class="box list m-2" style = "background-color: #ccc; height: 8rem">2</div>
                <div id="target-container" class="box list m-2" style = "background-color: #ccc; height: 8rem">3</div>
              </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
              <h3>Drag from Here</h3>
              <div id="source-container" class="list">
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka1.png"> <input id="jawaban" type="hidden" value="One to One bukan merupakan kardinalitas dari Supplier menyuplai Barang"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka2.png"> <input id="jawaban" type="hidden" value="One to One bukan merupakan kardinalitas dari Kasir melayani Pembeli"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka3.png"> <input id="jawaban" type="hidden" value="One to One bukan merupakan kardinalitas dari Pembeli membeli Barang"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka4.png"> <input id="jawaban" type="hidden" value="One to Many merupakan kardinalitas dari Supplier menyuplai Barang"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka5.png"> <input id="jawaban" type="hidden" value="One to Many bukan merupakan kardinalitas dari Kasir melayani Pembeli"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka6.png"> <input id="jawaban" type="hidden" value="One to Many merupakan kardinalitas dari Pembeli membeli Barang"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka7.png"><input id="jawaban" type="hidden" value="Many to One bukan merupakan kardinalitas dari Supplier menyuplai Barang"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka8.png"><input id="jawaban" type="hidden" value="Many to One bukan merupakan kardinalitas dari Kasir melayani Pembeli"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka9.png"><input id="jawaban" type="hidden" value="Many to One bukan merupakan kardinalitas dari Pembeli membeli Barang"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka10.png"><input id="jawaban" type="hidden" value="Many to Many bukan merupakan kardinalitas dari Supplier menyuplai Barang"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka11.png"><input id="jawaban" type="hidden" value="Many to Many merupakan kardinalitas dari Kasir melayani Pembeli"></div>
                <div class="list-item m-1" draggable="true"><img src="<?php echo base_url();?>assets/img/kardinalitas/ka12.png"><input id="jawaban" type="hidden" value="Many to Many bukan merupakan kardinalitas dari Pembeli membeli Barang"></div>
              </div>
            </div>
          </div>
        </div>

        <div data-aos="zoom-in">
          <br>
          <button type="submit" value="submit" id="btn-submit-custom" class="btn btn-primary m-1" style="width: 80px; height: 40px; border: none; border-radius: 8px;  display:none;">Submit</a></button>   
          </form>  
          <button type="submit" style="width: 80px; height: 40px; background-color: #f6f6f6; border: none; border-radius: 8px; margin-left: 0px;"><a href="<?php echo base_url(); ?>index.php/C_siswa"><b>Kembali</b></a></button>  
        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <!-- <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a> -->
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/apsdnd.js"></script>

</body>

</html>