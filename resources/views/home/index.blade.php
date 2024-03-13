<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foryoung Junior Ngu</title>
  <meta name="description" content="Foryoung Junior Ngu - Computer Engineer specializing in [Backend, PHP, Vue, Fullstack, software]">
  <meta name="keywords" content="Foryoung Junior Ngu, Computer Engineer, [Tech, Bambili, NAHPI, Uba]">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    @keyframes example {
        0% {color: red;}
        25% {color: yellow;}
        50% {color: white;}
        75% {color: green;}
        100% {color: red;}
    }

    h1 a {
        animation-name: example;
        animation-duration: 4s;
        animation-iteration-count: infinite;
    }

    h2 {
        animation: glow 2s ease-in-out infinite alternate;
    }

    @keyframes glow {
        from {
            text-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000, 0 0 30px #ff0000, 0 0 40px #ff0000;
        }

        to {
            text-shadow: 0 0 20px #ff0000, 0 0 30px #ff0000, 0 0 40px #ff0000, 0 0 50px #ff0000, 0 0 60px #ff0000;
        }
    }
</style>
</head>


<body>

  <!-- ======= Header ======= -->
  @include('../sections.header')
  <!-- End Header -->

  <!-- ======= About Section ======= -->
  @include('../sections.about')
  <!-- End About Section -->

  <!-- ======= Resume Section ======= -->
    @include('../sections.resume')
  <!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  @include('../sections.services')
  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
    @include('../sections.portfolio')
  <!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
    @include('../sections.contact')
  <!-- End Contact Section -->

  <div class="credits">
    Designed by <a href="">Foryoung Junior N.</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script>
    window.onload = function() {
        var typed = new Typed('#typed', {
            strings: ["Foryoung Junior N."],
            typeSpeed: 100,
            backSpeed: 50,
            loop: true
        });
    }
</script>

</body>

</html>
