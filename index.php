<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>UPT PPP BULU</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <script language="Javascript" type="text/javascript">
    function validateInput(input) {
    // Regular expression untuk mencocokkan huruf dan spasi
    const regex = /^[a-zA-Z\s]*$/;

    // Hapus karakter yang tidak sesuai dengan regex
    if (!regex.test(input.value)) {
        input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
      }
    }
  </script>

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">
  <?php include("menubar.php"); ?>

  

  <!-- // == Routing Logic == -->
<?php include("route.php"); ?>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Ikuti Kami di Media Digital</h4>
            <p>Untuk mendaptakan Informasi Terkini, silahkan ikuti di Sosial Media Kami</p>
            <p>
            <div class="social-links d-flex row justify-content-center text-center">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""><i class="bi bi-youtube"></i></a>
            <a href=""><i class="bi bi-threads"></i></a>
            </div>
          </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        

        <div class="col-lg-2 col-md-3 footer-links">
          <img src="assets/img/logo-upt.jpg" alt="" class="img-fluid">
        </div>

        <div class="col-lg-7 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename"><b>UPT Pelabuhan Perikanan Pantai Bulu</b></span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jalan Raya Tuban-Semarang Km.45</p>
            <p>Desa Bulumeduro, Bancar, Tuban 62354</p>
            <p><strong>Whatsapp:</strong> <span>+62 85910 6968 223</span> | <strong>Phone:</strong> <span>+62 356 411024</span> | <strong>Email:</strong> <span>ppp_bulu@jatimprov.go.id</span></p>
            <p></p>
          </div>
        </div>

        

        <div class="col-lg-2 col-md-3 footer-links">
        <h4>Link Terkait</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Website DKP Jatim</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Website Jatimprov</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Tim Aptika Pelabuhan Perikanan Pantai Bulu</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Didukung Oleh <a href="https://plkdev.my.id/">PLK Studio</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>