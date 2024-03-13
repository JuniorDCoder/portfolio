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
  <link rel="stylesheet" href="{{asset('assets/css/animations.css')}}">

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
  <script src="{{asset('assets/js/animations.js')}}"></script>

</body>

</html>
